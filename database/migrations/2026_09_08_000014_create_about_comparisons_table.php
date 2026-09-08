<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_comparisons', function (Blueprint $table) {
            $table->id();
            $table->string('metric');
            $table->text('traditional')->nullable();
            $table->text('jostech')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_comparisons_table');
    }
};
