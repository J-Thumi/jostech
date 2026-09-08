<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolio_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category')->nullable();
            $table->string('status')->nullable();
            $table->string('status_color')->nullable();
            $table->string('bg_glow')->nullable();
            $table->string('title_hover')->nullable();
            $table->string('tech_stack')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->boolean('external')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_projects_table');
    }
};
