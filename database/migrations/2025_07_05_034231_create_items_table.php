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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appraisal_id');
            $table->string('title', 255)->nullable();
            $table->string('image');
            $table->string('category', 255)->nullable();
            $table->string('condition_customer', 255)->nullable();
            $table->string('condition_seller', 255)->nullable();
            $table->string('brand', 255)->nullable();
            $table->string('maker', 255)->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->boolean('is_visible')->default(true);
            $table->text('memo')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('appraisal_id')->references('id')->on('appraisals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
