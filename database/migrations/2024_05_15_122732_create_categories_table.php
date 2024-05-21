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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title_qr');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        
        DB::table('categories')->insert([
            'title_qr'=>'Sonǵı jańalıqlar',
            'title_uz'=>"So'ngi yangiliklar",
            'title_ru'=>'Новости',
            'slug'=>'news'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
