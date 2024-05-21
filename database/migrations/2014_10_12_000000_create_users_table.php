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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('login', 32)->unique();
            $table->string('phone', 32)->unique();
            $table->string('password');
            $table->timestamps();
        });

        
        DB::table('users')->insert([
            'name'=>'Quwat',
            'login'=>'kuatbay827',
            'phone'=>'905906890',
            'password'=>Hash::make('0668451'),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
