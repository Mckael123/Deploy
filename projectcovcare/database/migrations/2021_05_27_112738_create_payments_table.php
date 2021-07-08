<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('users_name');
            // $table->unsignedBigInteger('products_id');
            $table->string('orderId')->unique();
            $table->integer('amountPayment');
            $table->date('paymentDate');
            $table->string('bankname',);
            $table->string('evidenceTransfer'); //bukti transfer gambar
            $table->string('status')->default(0);
            $table->foreign('users_name')
                ->references('name')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // $table->foreign('products_id')
            //     ->references('id')
            //     ->on('products');
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
        Schema::dropIfExists('payments');
    }
}
