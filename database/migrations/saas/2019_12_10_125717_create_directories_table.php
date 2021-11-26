<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoriesTable extends Migration
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
        Schema::connection($this->connection)->create('directories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('organization_id')->default(0);  
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->unsignedBigInteger('parent_directory_id')->default(0);  
            $table->string('directory_name');
            $table->string('tags');
            $table->string('disk')->nullable();
            $table->string('path')->nullable();
            $table->boolean('is_drive')->nullable();
            $table->boolean('is_archived')->nullable();
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->string('days')->nullable();

            $table->json('starred_by')->nullable();
            $table->boolean('status');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            
            $table->softDeletes();
            $table->timestamps();

            $table->index(['organization_id','parent_directory_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directories');
    }
}
