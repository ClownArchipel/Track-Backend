<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_document');
            $table->unsignedBigInteger('sender');
            $table->unsignedBigInteger('receiver');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('priority_id');
            $table->string('file');
            $table->string('description');
            $table->string('uuid');
            $table->foreign('sender')->references('id')->on('users')->delete('cascade');
            $table->foreign('receiver')->references('id')->on('users')->delete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->delete('cascade');
            $table->foreign('priority_id')->references('id')->on('priorities')->delete('cascade');
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
        Schema::dropIfExists('documents');
    }
}
