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
        Schema::create('appraisals', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_number', 4)->unique();
            $table->string('status', 255);
            $table->string('first_contact_at', 255)->nullable();
            $table->string('staff', 255);
            $table->string('area', 255)->nullable();
            $table->string('family_name', 255);
            $table->string('tel1', 4);
            $table->string('tel2', 4);
            $table->string('tel3', 4);
            $table->string('experienced', 255);
            $table->text('hope_request');
            $table->text('sms_log')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appraisals');
    }
};