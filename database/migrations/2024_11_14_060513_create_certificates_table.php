<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('issued_by');
            $table->date('issued_at');
            $table->text('description');
            $table->string('file');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
};