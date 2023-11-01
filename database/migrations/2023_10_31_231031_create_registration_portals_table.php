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
        Schema::create('registration_portals', function (Blueprint $table) {
            $table->id();
            $table->date('open_at');
            $table->date('close_at');
            $table->foreignId('year_id')->nullable()->constrained('academic_sessions')->cascadeOnDelete();
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
        Schema::dropIfExists('registration_portals');

    }
};
