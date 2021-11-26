<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection;
    public function __construct()
    {
        $this->connection = getConnection2();
    }

    public function up()
    {
        Schema::connection($this->connection)->create('journals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->string('unique_no')->unique();
            $table->string('reference_no')->comment('purchase order / sales order /auto increment');
            $table->text('note')->nullable();
            $table->json('journal_currency');
            $table->float('sub_total_amount');
            $table->float('total_amount');
            $table->boolean('is_currency_conversion_applied')->nullable();
            $table->string('converted_from_currency_code')->nullable();
            $table->string('converted_to_currency_code')->nullable();
            $table->float('conversion_rate')->nullable();
            $table->float('converted_subtotal_amount')->nullable();
            $table->float('converted_total_amount')->nullable();
            $table->json('attachments');
            $table->json('starred_by')->nullable();
            $table->boolean('status');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->softDeletes();
            $table->timestamps();

            $table->index(['organization_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journals');
    }
}
