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
        Schema::create('class_info', function (Blueprint $table) {
            $table->id();
            $table->id('base_id');
            $table->id('cource_id');
            $table->string('term');
            $table->date('date_start');
            $table->date('date_end');
            $table->text('progress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_info');
    }
};
