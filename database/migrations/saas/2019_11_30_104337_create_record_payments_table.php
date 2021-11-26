<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordPaymentsTable extends Migration
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
        Schema::connection($this->connection)->create('record_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            
            $table->unsignedBigInteger('contact_id')->comment('value from contacts table');
            $table->foreign('contact_id')->references('id')->on('contact')->onDelete('cascade');
            $table->unsignedTinyInteger('payment_against_type')->nullable();
            $table->unsignedBigInteger('reference_of_main_id')->comment('value from Invoice/Expense Or any other payment capturing table');
            $table->string('unique_no')->unique();
            $table->float('total_amount_payable');
            $table->boolean('is_tax_deducted');
            $table->float('amount_withheld')->nullable();
            $table->unsignedBigInteger('coa_tax_account_id')->nullable()->comment('value from Chart of accounts table');
            $table->date('payment_date');
            $table->float('recorded_amount');
            $table->unsignedTinyInteger('payment_mode');
            $table->unsignedBigInteger('bank_account_id');
            $table->string('reference_no')->nullable()->comment('references');
            $table->text('notes')->nullable();
            $table->json('starred_by')->nullable();
            $table->boolean('status');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
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
        Schema::dropIfExists('record_payments');
    }
}
