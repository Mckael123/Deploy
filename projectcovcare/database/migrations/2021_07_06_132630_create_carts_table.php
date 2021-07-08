<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            // $table->Integer('sumprice')->nullable();
            $table->Integer('subprice')->nullable();
            $table->string('buyer');
            $table->integer('quantity');
            $table->unsignedBigInteger('idProduct')->nullable();
            $table->unsignedBigInteger('orderId')->nullable();
            $table->foreign('buyer')
            ->references('name')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('idProduct')
            ->references('id')
            ->on('products')
            ->onDelete('cascade');

            $table->foreign('orderId')
            ->references('id')
            ->on('orders')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('carts');
    }
}
