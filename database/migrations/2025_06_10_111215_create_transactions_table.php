<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table) {
            $table->id();
            //  $table->string('property_id')->constrained('properties')->onDelete('cascade');
            $table->string('type');//for property what's kind it is(rent,buy..)
            $table->string('amount');
            $table->date('transaction_date');
            $table->foreignId('buyer_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade');
            $table->string('payment_method');
            $table->string('status')->default('pending');
            $table->timestamps();
//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
