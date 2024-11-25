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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('home_background_image')->nullable();
            $table->string('title')->nullable();
            $table->integer('school_visited')->nullable();
            $table->integer('communities_visited')->nullable();
            $table->integer('number_of_members')->nullable();
            $table->string('aboutus_background_image')->nullable();
            $table->string('location')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email_address')->nullable();
            $table->string('why_trust_us')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
