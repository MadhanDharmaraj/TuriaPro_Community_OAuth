<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('valid_from');
            $table->date('valid_to');


            $table->string('discount_type')->comment('flat','percentage');
            $table->decimal('discount_value');
            $table->unsignedBigInteger('user_group_id')->nullable();


            $table->string('description');
            $table->unsignedBigInteger('created_by')->comment('id column from users table');
            $table->unsignedBigInteger('updated_by')->comment('id column from users table');;
            $table->boolean('status');
            $table->softDeletes();
            $table->timestamps();

             $table->index(['user_group_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
