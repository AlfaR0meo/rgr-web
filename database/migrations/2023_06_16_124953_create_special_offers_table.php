<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('special_offers', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->longText("text");
            $table->string("image_path");
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('special_offers');
    }
};
