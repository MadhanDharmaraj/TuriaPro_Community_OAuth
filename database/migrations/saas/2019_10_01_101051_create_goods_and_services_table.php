<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsAndServicesTable extends Migration
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
        Schema::connection($this->connection)->create('goods_and_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->unsignedTinyInteger('category_type');
            $table->string('name');
            $table->string('unit_type_id')->default(0);
            $table->string('hsn_code')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_sales_info')->nullable();
            $table->float('selling_price',14,2)->nullable();
            $table->unsignedBigInteger('income_account_id')->nullable();
            $table->foreign('income_account_id')->references('id')->on('chart_of_accounts')->onDelete('cascade');
            $table->boolean('is_pucahase_info')->nullable();
            $table->float('cost_price')->nullable();
            $table->float('expenses_amount')->nullable();
            $table->unsignedTinyInteger('tax_preference')->nullable();
            $table->mediumInteger('exemption_reason_id')->nullable();
            $table->foreign('exemption_reason_id')->references('id')->on('exemption_reasons')->onDelete('cascade');
            $table->json('taxes')->nullable();
            $table->unsignedBigInteger('inventory_account_id')->nullable();
            $table->foreign('inventory_account_id')->references('id')->on('chart_of_accounts')->onDelete('cascade');
            $table->string('opening_stock')->nullable();
            $table->date('as_on_date')->nullable();
            $table->float('opening_stock_rate_per_unit')->nullable();
            $table->boolean('status');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->softDeletes();
            $table->timestamps();

            $table->index(['organization_id','income_account_id']);
            $table->index(['exemption_reason_id','inventory_account_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods_and_services');
    }
}
