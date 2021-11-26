<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('logo');
            $table->unsignedBigInteger('favicon');
            $table->string('site_name');
            $table->text('site_description');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->text('city');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('country_id');
            $table->string('pincode');
            $table->unsignedBigInteger('currency_id');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();

            $table->index(['state_id']);
            $table->index(['country_id']);
            $table->index(['currency_id']);
            $table->index(['created_by']);
            $table->index(['updated_by']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_settings');
    }
}
