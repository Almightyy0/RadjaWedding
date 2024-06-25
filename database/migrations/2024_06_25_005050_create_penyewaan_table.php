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
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID');
            $table->date('RentalDate');
            $table->date('ReturnDate');
            $table->date('ActualReturnDate')->nullable();
            $table->decimal('TotalPrice', 10, 2);
            $table->enum('Status', ['pending', 'completed', 'cancelled', 'returned'])->default('pending');
            $table->unsignedBigInteger('BundleID')->nullable();
            $table->timestamps();

            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('BundleID')->references('id')->on('bundle_penyewaan')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewaan');
    }
};
