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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_type')->nullable();
            $table->string('experience')->nullable();
            $table->decimal('salary_low', 10, 2)->nullable();
            $table->decimal('salary_high', 10, 2)->nullable();
            $table->string('role')->nullable();
            
        
            $table->string('location_name');
            // Corrected Foreign Key for category_id
            $table->foreignId('category_id')->constrained('job_categories')->onDelete('cascade');
        
            $table->text('description')->nullable();
            $table->integer('openings')->default(1);
        
            // Corrected Foreign Key for education_id
            $table->foreignId('education_id')->constrained('job_educations')->onDelete('cascade');
        
            // Corrected Foreign Key for user_id
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        
            $table->timestamp('date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
