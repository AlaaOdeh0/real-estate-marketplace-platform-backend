<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price');
            $table->string('description')->nullable();
            $table->string('address');
            $table->string('status'); 
            $table->decimal('bedrooms');
            $table->decimal('bathrooms');
            $table->decimal('area');
            $table->string('agency')->nullable();
            $table->string('agent')->nullable();
            $table->string('media_url')->nullable();
            $table->string('features')->nullable();
            $table->decimal('amount')->nullable();
            $table->date('price_cut_date')->nullable();
            $table->timestamps(); });
    }

  
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn(['title'
            ,'price'
            ,'description'
            ,'address'
            ,'status'
            ,'bedrooms'
            ,'bathrooms'
            ,'area'
            ,'agency'
            ,'agent'
            ,'features'
            ,'amount'
            ,'date of priceCut']);
        });
    }
}
