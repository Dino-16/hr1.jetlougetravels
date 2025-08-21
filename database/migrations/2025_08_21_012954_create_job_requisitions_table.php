<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_requisitions', function (Blueprint $table) {
            $table->id();
            $table->string('requested_by');       // Who requested the requisition
            $table->string('department');
            $table->string('job_type');
            $table->text('description')->nullable();
            $table->integer('open_positions')->default(0);
            $table->integer('filled_positions')->default(0);
            $table->decimal('salary', 10, 2)->nullable();
            $table->enum('priority', ['Low', 'Medium', 'High'])->default('Medium');
            $table->date('requested_date')->nullable();
            $table->enum('status', ['Pending', 'In Review', 'Approved', 'Rejected', 'Closed'])->default('Pending');
            $table->text('remarks')->nullable(); // reason for reject or comments
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_requisitions');
    }
};
