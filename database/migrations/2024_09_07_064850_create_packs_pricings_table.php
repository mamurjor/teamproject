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
        Schema::create('packs_pricings', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('price');
            $table->string('button_text');
            $table->string('button_url');
            $table->string('package_feature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packs_pricings');
    }
};
