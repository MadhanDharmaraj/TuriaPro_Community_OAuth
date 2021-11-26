<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompliancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compliances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('begin_date')->nullable();
            $table->date('due_date')->nullable();
            $table->date('extended_date')->nullable();
            $table->string('filing_fees');
            $table->string('late_fees_duration');
            $table->string('penalty');    
            $table->text('description');
            $table->string('frequency');    
            $table->string('recurring');    
            $table->boolean('status');    
            $table->unsignedMediumInteger('law_category_id');
            $table->unsignedMediumInteger('financial_year_id');
            $table->unsignedMediumInteger('business_entity_id');
            $table->softDeletes();
            $table->timestamps();

            $table->index(['law_category_id','financial_year_id','business_entity_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compliances');
    }
}
