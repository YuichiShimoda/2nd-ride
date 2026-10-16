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
		Schema::create('results', function (Blueprint $table) {
			$table->id();
			$table->string('title', 255);

			$table->boolean('is_published')->default(true);
			$table->text('description');
			$table->string('slug', 255)->unique();
			$table->string('thumb');

			$table->foreignId('category_id')->constrained();
			$table->foreignId('area_id')->constrained();
			$table->foreignId('purchase_item_id')->constrained();

			$table->unsignedInteger('price');
			$table->string('rank', 255);
			$table->text('comment')->nullable();
			$table->text('memo')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('results');
	}
};
