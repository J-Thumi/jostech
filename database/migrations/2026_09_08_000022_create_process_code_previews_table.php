<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('process_code_previews', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->string('status')->nullable();
            $table->string('class_name')->nullable();
            $table->string('extends_class')->nullable();
            $table->string('comment')->nullable();
            $table->string('method_name')->nullable();
            $table->string('endpoint')->nullable();
            $table->string('table_name')->nullable();
            $table->string('test_summary')->nullable();
            $table->string('coverage')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('process_code_previews_table');
    }
};
