<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pesanan_id');
            $table->unsignedBigInteger('layanan_id')->nullable();
            $table->string('nama_item')->nullable();
            $table->string('jenis_layanan')->nullable();
            $table->decimal('jumlah_kilo', 8, 2)->nullable();
            $table->decimal('jumlah_meter', 8, 2)->nullable();
            $table->decimal('sub_total', 12, 2)->default(0);
            $table->timestamps();

            $table->foreign('pesanan_id')->references('id')->on('pesanan')->onDelete('cascade');
            $table->foreign('layanan_id')->references('id')->on('layanan_laundry')->onDelete('set null');
        });
    }

    public function down(): void {
        Schema::dropIfExists('detail_pesanan');
    }
};