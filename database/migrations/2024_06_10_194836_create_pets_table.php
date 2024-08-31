<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('name');
            $table->string('breed');
            $table->enum('gender', ['male', 'female']);
            $table->integer('age')->default(0);
            $table->longText('details')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('images')->nullable();
            $table->enum('health_status', ['healthy', 'sick', 'injured', 'pregnant']);
            $table->enum('special_needs', ['yes', 'no'])->default('no');
            $table->float('fee')->default(0);
            $table->enum('availability', ['available', 'unavailable'])->default('available');
            $table->integer('status')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
