<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalItemsTable extends Migration
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
        Schema::connection($this->connection)->create('journal_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');

            $table->unsignedBigInteger('journal_id');
            $table->foreign('journal_id')->references('id')->on('journals')->onDelete('cascade');

            $table->unsignedBigInteger('account_id');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('contact_id')->comment('value from contacts table');
            $table->foreign('contact_id')->references('id')->on('contact')->onDelete('cascade');
            $table->float('debit',14,2);
            $table->float('credit',14,2);
            $table->softDeletes();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journal_items');
    }
}
