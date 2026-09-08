<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // home, about, services, pricing, process, contact, portfolio
            $table->string('hero_badge')->nullable();
            $table->string('hero_title_prefix')->nullable();
            $table->string('hero_title_highlight')->nullable();
            $table->string('hero_title_suffix')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('cta_heading')->nullable();
            $table->text('cta_description')->nullable();
            $table->string('cta_button_text')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages_table');
    }
};
