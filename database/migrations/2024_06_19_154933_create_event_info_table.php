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
        Schema::create('event_info', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->dateTime('date');
            $table->boolean('attendance');
            $table->boolean('join');
            $table->id('menter_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_info');
    }
};
