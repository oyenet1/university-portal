<?php

use App\Models\City;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('surname');
            $table->string('uci')->unique();
            $table->foreignIdFor(City::class)->nullable()->constrained()->nullOnDelete();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->boolean('notify_email')->default(false);
            $table->boolean('notify_sms')->default(false);
            $table->string('otp')->nullable();
            $table->string('current_role')->nullable()->default('customer');
            $table->foreignId('parent_id')->nullable()->constrained('users')->nullOnDelete();
            $table->text('kyc')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('status')->default('active');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};