<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        $this->down();
        Schema::create('plan_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();            
            $table->unsignedBigInteger('plan_validity_id');
            $table->float('plan_amount',5,2);
            $table->mediumText('features');
            $table->mediumText('tax_id')->nullable()->comment("json field");
            $table->unsignedInteger('trial_period')->nullable()->default(0);
            $table->mediumText('feature_key_word')->nullable()->unique();
            $table->boolean('status');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->default(0);            
            $table->softDeletes();
            $table->timestamps();

            $table->index(['plan_validity_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_packages');
    }
}
