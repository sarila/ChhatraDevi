<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('excerpt');
            $table->longText('description');
            $table->string('coverimage');
            $table->string('frontimage');
            $table->date('start_date');
            $table->bigInteger('goal')->nullable();
            $table->unsignedBigInteger('gallery_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->tinyInteger('status');
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('SET NULL');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('SET NULL');
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
        Schema::dropIfExists('projects');
    }
}
