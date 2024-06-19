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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->id('menter_id');
            $table->id('class_info_id');
            $table->id('customer_number');
            $table->id('student_number');
            $table->string('name');
            $table->string('name');
            $table->string('gender');
            $table->date('birthday');
            $table->integer('age');
            $table->string('email');
            $table->string('postcode',7);
            $table->string('prefecture');
            $table->string('city');
            $table->string('street');
            $table->string('room_number');
            $table->string('phone_number',11);
            $table->string('emergency_contact',11);
            $table->string('relationship');
            $table->string('university');
            $table->string('faculty');
            $table->string('department');
            $table->string('grade');
            $table->string('highschool');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
