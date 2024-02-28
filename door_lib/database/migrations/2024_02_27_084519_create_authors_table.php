<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('author');
        $table->text('description');
        $table->date('published_date');
        $table->string('isbn');
        $table->string('cover_image');
    });
}

    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
