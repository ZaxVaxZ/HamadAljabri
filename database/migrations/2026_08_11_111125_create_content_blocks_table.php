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
        Schema::create('content_blocks', function (Blueprint $table) {
			$table->id();
			$table->string('type');
			$table->string('locale', 10)->default('ar');
			$table->integer('order')->default(0);
			$table->string('thumbnail')->nullable();   // path in storage
			$table->string('title')->nullable();
			$table->longText('description')->nullable();
			$table->string('link')->nullable();
			$table->string('origin')->nullable();
			$table->string('content')->nullable();
			$table->boolean('featured')->default(true);
			$table->boolean('active')->default(true);
			$table->timestamps();

			$table->index(['locale', 'type', 'order']);
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_blocks');
    }
};
