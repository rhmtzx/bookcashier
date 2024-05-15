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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('pelangganid');
            $table->string('produkid');
            $table->string('jumlahproduk');
            $table->string('totalharga');
            $table->decimal('bayar', 15, 2);  // Menambahkan kolom bayar
            $table->decimal('kembalian', 15, 2);  // Menambahkan kolom kembalian
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
