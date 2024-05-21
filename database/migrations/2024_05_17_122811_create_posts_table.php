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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('title_qr')->nullable();
            $table->longText('body_qr')->nullable();
            $table->string('slug_qr');
            $table->string('title_uz')->nullable();
            $table->longText('body_uz')->nullable();
            $table->string('slug_uz');
            $table->string('title_ru')->nullable();
            $table->longText('body_ru')->nullable();
            $table->string('slug_ru');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
