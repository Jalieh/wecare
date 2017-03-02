<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{

    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->unique();
        $table->string('chemical')->unique();
        $table->text('description');
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
