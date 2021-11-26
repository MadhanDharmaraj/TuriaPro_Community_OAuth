<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceItemsTable extends Migration
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
        Schema::connection($this->connection)->create('invoice_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');

            $table->unsignedBigInteger('invoice_id');
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');

            $table->unsignedBigInteger('goods_and_service_id')->comment('value fromgoods and services table');
            $table->foreign('goods_and_service_id')->references('id')->on('goods_and_service')->onDelete('cascade');            
            $table->string('description')->nullable();
            $table->string('quantity');
            $table->float('actual_price',14,2);
            $table->float('price',14,2);
            $table->json('taxes');
            $table->boolean('is_tax_applicable');

            $table->unsignedBigInteger('tax_group_id')->nullable();
            $table->unsignedTinyInteger('tax_group_id')->nullable();

            $table->float('sub_total_amount',14,2);
            $table->float('converted_sub_total_amount',14,2);
            $table->softDeletes();
            $table->timestamps();

            
            $table->index(['organization_id','invoice_id']);
            $table->index(['goods_and_service_id','tax_group_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_items');
    }
}
