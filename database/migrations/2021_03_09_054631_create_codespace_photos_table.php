<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodespacePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codespace_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codespace_id');
            $table->string('path');
            $table->timestamps();

            $table->foreign('codespace_id')->references('id')->on('codespaces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codespace_photos');
    }
}
