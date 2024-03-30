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
        Schema::create('publisher', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pub_websit')->nullable();
            $table->string('decripton')->nullable();
            $table->string('photo')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publisher');
    }
};
