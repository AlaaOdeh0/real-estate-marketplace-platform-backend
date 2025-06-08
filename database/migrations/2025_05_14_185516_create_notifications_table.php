<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{

    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('content');
            $table->string('status')->default('unread');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });}



    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
