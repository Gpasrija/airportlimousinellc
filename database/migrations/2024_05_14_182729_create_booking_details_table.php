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
        if (!Schema::hasTable('booking_details')) {
            Schema::create('booking_details', function (Blueprint $table) {
                $table->id();
                $table->string('bookingId')->nullable();
                $table->string('vehicle')->nullable();
                $table->date('date')->nullable();
                $table->string('time')->nullable();
                $table->string('from')->nullable();
                $table->string('to')->nullable();
                $table->integer('distance')->nullable();
                $table->integer('hours')->nullable();
                $table->integer('estimate')->nullable();
                $table->boolean('is_booked')->default(false);
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone_number')->nullable();
                $table->string('flight_number')->nullable();
                $table->string('pickup')->nullable();
                $table->string('dropoff')->nullable();
                $table->text('message')->nullable();
                $table->boolean('is_return')->default(false);
                $table->date('return_date')->nullable();
                $table->string('return_time')->nullable();
                $table->string('return_from')->nullable();
                $table->string('return_to')->nullable();
                $table->timestamps();
            });        
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_details');

    }
};
