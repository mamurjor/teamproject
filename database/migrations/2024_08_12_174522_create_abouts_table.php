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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            $table->string('title', 300);
            $table->string('sub_title', 300);
            $table->text('description');
            $table->string('btn_text', 300);
            $table->text('btn_url');


            $table->text('birth_date');
            $table->string('email', 300);
            $table->text('phone');
            $table->string('skype_username', 300);
            $table->text('address');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};


