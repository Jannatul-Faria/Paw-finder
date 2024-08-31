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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name', 300);
            $table->string('slug', 300);
            $table->string('url', 300)->nullable();
            $table->string('image', 300)->nullable();
            $table->string('remark', 300)->nullable();
            $table->integer('order_by')->nullable();
            $table->boolean('is_feature')->default(false);
            $table->boolean('is_status')->default(false);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
