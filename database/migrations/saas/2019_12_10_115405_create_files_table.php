<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
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
        Schema::connection($this->connection)->create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('organization_id')->default(0);  
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->unsignedBigInteger('directory_id')->default(0);  
            $table->foreign('directory_id')->references('id')->on('directories')->onDelete('cascade');
            $table->string('original_filename');
            $table->string('stored_filename')->unique();
            $table->string('extension');
            $table->string('size');
            $table->string('disk')->nullable();
            $table->string('path')->nullable();
            $table->boolean('is_drive')->nullable();
            $table->boolean('is_archived')->nullable();
            $table->json('starred_by')->nullable();
            $table->boolean('status');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            
            $table->softDeletes();
            $table->timestamps();

            $table->index(['organization_id','directory_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
