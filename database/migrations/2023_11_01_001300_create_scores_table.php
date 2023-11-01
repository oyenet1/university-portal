<?php

use App\Models\Course;
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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('test')->nullable();
            $table->integer('exam')->nullable();
            $table->integer('total')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('reg_id')->constrained('student_course_regs')->cascadeOnDelete();
            $table->foreignIdFor(Course::class)->nullable()->constrained()->nullOnDelete();
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //$table->dropSoftDeletes();
        Schema::dropIfExists('scores');

    }
};
