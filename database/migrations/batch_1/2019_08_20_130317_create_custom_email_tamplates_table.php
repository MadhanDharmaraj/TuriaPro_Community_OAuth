<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomEmailTamplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_email_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('default_email_template_id');

            $table->string('from');
            $table->string('subject');
            $table->string('content');
            $table->string('footer');
            $table->unsignedTinyInteger('status');

            $table->softDeletes();
            $table->timestamps();
            
            $table->index(['default_email_template_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_email_tamplates');
    }
}
