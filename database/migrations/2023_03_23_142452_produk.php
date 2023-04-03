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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_id');
            $table->string('user_id');
            $table->integer('produk_id');
            $table->string('name');
            $table->integer('harga');
            $table->string('image');
            $table->string('deskripsi');
            $table->string('lokasi');
            $table->integer('rating');
            $table->integer('terjual');
            $table->string('url');
            $table->enum('bestseller',['best','normal'])->default('best');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
