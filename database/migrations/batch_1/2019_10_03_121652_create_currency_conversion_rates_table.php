<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyConversionRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_conversion_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('from_currency')->comment('Should Fill with currency codes Like "INR,USD"');
            $table->string('to_currency')->comment('Should Fill with currency codes Like "INR,USD"');
            $table->float('conversion_rate');
            $table->dateTime('last_update_at');
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
        Schema::dropIfExists('currency_conversion_rates');
    }
}
