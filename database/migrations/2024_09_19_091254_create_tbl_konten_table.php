<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKontenTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_konten', function (Blueprint $table) {
            $table->id();
            $table->string('konten');
            $table->text('description')->nullable();;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_konten');
    }
}