<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->bigInteger('duration'); //in days
            $table->bigInteger('no_of_seat'); //in days
            $table->string('excerpt');
            $table->longText('description');
            $table->string('feature_image');
            $table->date('date');
            $table->string('time_duration');
            $table->unsignedBigInteger('gallery_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->tinyInteger('status');
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
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
        Schema::dropIfExists('events');
    }
}
