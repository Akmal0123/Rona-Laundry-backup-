<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pesanan_id')->nullable();
            $table->text('alamat_pickup')->nullable();
            $table->text('alamat_drop')->nullable();
            $table->dateTime('tanggal_pickup')->nullable();
            $table->dateTime('tanggal_drop')->nullable();
            $table->string('status_delivery')->default('pending');
            $table->timestamps();

            $table->foreign('pesanan_id')->references('id')->on('pesanan')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('deliveries');
    }
};