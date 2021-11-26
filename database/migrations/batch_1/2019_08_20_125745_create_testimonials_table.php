<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('testimonial_image_id');

            $table->string('name');
            $table->string('link');
            $table->string('content');

            $table->boolean('status');
            $table->softDeletes();
            $table->timestamps();

            $table->index(['testimonial_image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}
