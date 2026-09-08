<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services_matrix', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->string('stack')->nullable();
            $table->text('deliverables')->nullable();
            $table->text('use_case')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services_matrix_table');
    }
};
