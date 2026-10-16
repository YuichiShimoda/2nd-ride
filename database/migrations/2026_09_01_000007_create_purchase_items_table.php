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
		Schema::create('purchase_items', function (Blueprint $table) {
			$table->id();
			$table->string('name', 255);

			$table->foreignId('maker_id')->nullable()->constrained('makers')->onDelete('set null');
			$table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('set null');
			$table->foreignId('designer_id')->nullable()->constrained('designers')->onDelete('set null');

			$table->string('model_number', 255)->nullable();
			$table->unsignedMediumInteger('manufacture_year')->nullable();
			$table->string('condition', 255)->nullable();
			$table->string('accessories', 255)->nullable();
			$table->string('material', 255)->nullable();
			$table->text('remarks')->nullable();

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('purchase_items');
	}
};
