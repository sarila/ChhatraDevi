<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->text('product_description');
            $table->float('price');
            $table->integer('quantity');
            $table->integer('discount')->nullable();
            $table->tinyInteger('discount_type')->default(0);
            $table->string('SKU')->nullable();
            $table->string('coverimage')->nullable();
            $table->unsignedBigInteger('pcategory_id')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->foreign('pcategory_id')->references('id')->on('pcategories')->onDelete('SET NULL');
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
        Schema::dropIfExists('products');
    }
}
