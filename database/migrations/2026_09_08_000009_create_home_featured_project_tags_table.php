<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_featured_project_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_featured_project_id')->constrained()->cascadeOnDelete();
            $table->string('tag');
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_featured_project_tags_table');
    }
};
