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
        Schema::create('about_person_details', function (Blueprint $table) {
            $table->id();
            $table->string('main_titile');
            $table->string('sub_titile');
            $table->string('discription');
            $table->string('btn_text');
            $table->string('btn_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_person_details');
    }
};
