<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->bigInteger('contact');
            $table->string('address');
            $table->string('state'); 
            // $table->boolean('account'); //If true account is created
            $table->longText('order_note');
            $table->tinyInteger('status')->default(0); //0 for unconfirmed, 1 for confirmed, 2 for shipping, 3 for delivered
            $table->tinyInteger('payment_process')->default(0); //0 for COD
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
        Schema::dropIfExists('orders');
    }
}
