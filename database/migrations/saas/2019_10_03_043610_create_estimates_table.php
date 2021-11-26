<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimatesTable extends Migration
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
        Schema::connection($this->connection)->create('estimates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->string('unique_no')->unique();
            $table->unsignedBigInteger('contact_id')->comment('value from contacts table');
            $table->foreign('contact_id')->references('id')->on('contact')->onDelete('cascade');
            $table->string('contact_email');
            $table->unsignedBigInteger('place_of_supply_id')->comment('value from states table');
            $table->string('gstin')->nullable();
            $table->json('billing_currency');
            $table->json('billing_address');
            $table->json('organization_data');
            $table->date('estimate_date');
            $table->date('payment_due');
            $table->string('reference_order_no')->comment('purchase order / sales order /auto increment');
            $table->text('note')->nullable();
            $table->float('subtotal_amount');
            $table->float('total_amount');
            $table->unsignedTinyInteger('tax_process_type')->comment('Tax Inclusive / Tax Exclusive');
            $table->json('calculated_taxes');
            $table->boolean('is_discount_applied');
            $table->unsignedTinyInteger('discount_type')->nullable()->comment('flat / percentage');
            $table->string('discount_rate')->nullable();
            $table->string('addon_field_1_label')->nullable();
            $table->string('addon_field_1_value')->nullable();
            $table->boolean('is_currency_conversion_applied')->nullable();
            $table->string('converted_from_currency_code')->nullable();
            $table->string('converted_to_currency_code')->nullable();
            $table->float('conversion_rate')->nullable();
            $table->float('converted_subtotal_amount')->nullable();
            $table->float('converted_total_amount')->nullable();
            $table->json('starred_by')->nullable();
            $table->boolean('status');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->softDeletes();
            $table->timestamps();

            
            $table->index(['organization_id','contact_id','place_of_supply_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimates');
    }
}
