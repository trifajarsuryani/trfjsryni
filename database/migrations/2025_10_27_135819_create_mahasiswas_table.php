<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();       // pakai unique() dengan tanda kurung
            $table->string('nim')->unique();          // ganti ke string atau tetap bigInteger jika memang angka besar
            $table->string('prodi');
            $table->string('nohp');                   // lebih aman pakai string
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
