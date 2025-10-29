<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('layanan_laundry', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_layanan');
            $table->decimal('harga_perkilo', 12, 2)->nullable();
            $table->decimal('harga_permeter', 12, 2)->nullable();
            $table->decimal('harga_satuan', 12, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('layanan_laundry');
    }
};