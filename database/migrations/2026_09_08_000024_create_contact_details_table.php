<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_details', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('response_time')->nullable();
            $table->string('turnaround')->nullable();
            $table->text('turnaround_detail')->nullable();
            $table->string('confidentiality')->nullable();
            $table->text('confidentiality_detail')->nullable();
            $table->string('terminal_status')->nullable();
            $table->string('terminal_version')->nullable();
            $table->text('terminal_command')->nullable();
            $table->text('terminal_success_msg')->nullable();
            $table->text('terminal_info_msg')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_details_table');
    }
};
