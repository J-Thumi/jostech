<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('process_phases', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('label')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('bg_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('shadow_color')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('process_phases_table');
    }
};
