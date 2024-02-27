<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('biography')->nullable();
            $table->string('image')->nullable();
            $table->string('website')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
