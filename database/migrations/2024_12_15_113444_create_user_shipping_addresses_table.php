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
        Schema::create('user_shipping_addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Specify the storage engine
            $table->bigIncrements('user_shippingAddressID');
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('userID')->on('users');
            $table->unsignedBigInteger('shippingAddressID');
            $table->foreign('shippingAddressID')->references('shippingAddressID')->on('shipping_addresses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_shipping_addresses');
    }
};
