<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultEmailTamplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_email_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('from');
            $table->string('subject');
            $table->string('content');
            $table->string('footer');
            $table->unsignedTinyInteger('status');

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
        Schema::dropIfExists('default_email_tamplates');
    }
}
