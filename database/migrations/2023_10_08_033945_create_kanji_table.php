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
        Schema::create('kanji', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kanji_topic_id');
            $table->string('kanji');
            $table->string('vn_cn');
            $table->string('reading_on')->nullable();
            $table->string('reading_kun')->nullable();
            $table->string('meaning');
            $table->string('remember_kanji')->nullable();
            $table->string('remember_sentence')->nullable();
            $table->string('related_kanji_1')->nullable();
            $table->string('related_kanji_2')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kanji');
    }
};
