<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('user_id');
            $table->integer('is_baid')->default(0);
            $table->integer('category_id');
            $table->string('publisher_id');
            $table->date('publication_date');
            $table->integer('number_of_pages');
            // $table->doub('price', 10, 2)->nullable();
            $table->double('price')->nullable();
            $table->string('language');
            $table->text('description');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
