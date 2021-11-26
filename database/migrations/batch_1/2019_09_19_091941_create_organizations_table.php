<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('account_id');            
            $table->string('name');
            $table->string('business_email');
            $table->unsignedBigInteger('business_type_id');
            $table->foreign('business_type_id')->references('id')->on('business_types')->onDelete('cascade');

            $table->unsignedBigInteger('business_entity_id');
            $table->foreign('business_entity_id')->references('id')->on('business_entities')->onDelete('cascade');

            $table->char('contact_no',50)->nullable();
            $table->unsignedBigInteger('currency_id')->default(0);
            $table->unsignedBigInteger('country_id')->default(0);
            $table->unsignedBigInteger('state_id')->default(0);
            $table->text('address_line_2')->nullable();
            $table->text('address_line_2')->nullable();
            $table->text('pin_zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('gstin')->nullable();
            $table->unsignedBigInteger('timezone_id')->default(0);
            $table->unsignedBigInteger('plan_id')->default(0);
            $table->foreign('plan_id')->references('id')->on('plan_packages')->onDelete('cascade');
            $table->unsignedBigInteger('charge_card_id')->default(0);            
            $table->foreign('charge_card_id')->references('id')->on('charge_cards')->onDelete('cascade');

            $table->string('domain')->unique();
            $table->unsignedBigInteger('database_id');        
            $table->foreign('database_id')->references('id')->on('databases')->onDelete('cascade');

            $table->boolean('is_default')->comment('for primary account');
            $table->string('reference_code');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['business_type_id','business_entity_id']);
            $table->index(['database_id','plan_id']);
            $table->index(['country_id','state_id']);
            $table->index(['timezone_id','currency_id']);            
            $table->index(['charge_card_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
