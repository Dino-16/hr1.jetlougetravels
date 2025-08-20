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
        Schema::create('job_information', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->text('job_description');
            $table->text('job_summary');
            $table->enum('job_type', ['full-time', 'part-time', 'contract', 'freelance']);
            $table->enum('job_arrangement', ['On-site', 'Remote', 'Hybrid']);
            $table->text('job_responsibilities');
            $table->text('job_qualifications');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_information');
    }
};
