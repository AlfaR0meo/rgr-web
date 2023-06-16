<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->longText("product_ids"); // без пробелов числа разделенные запятыми
            $table->string("delivery_method");
            $table->string("payment_method");
            $table->string("fullname");
            $table->string("phone");
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('orders');
    }
};
