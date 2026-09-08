<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pricing_tiers', function (Blueprint $table) {
            $table->id();
            $table->string('badge')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('price');
            $table->string('billing_period')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('featured_badge')->nullable();
            $table->string('badge_color')->nullable();
            $table->string('border_style')->nullable();
            $table->string('icon_color')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_class')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pricing_tiers_table');
    }
};
