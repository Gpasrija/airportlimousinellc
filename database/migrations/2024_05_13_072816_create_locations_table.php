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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('city');
            $table->text('state');
            $table->text('country');
            $table->string('zipcode');
            $table->string('latitude', 20); // Assuming latitude can have up to 20 characters
            $table->string('longitude', 20); // Assuming longitude can have up to 20 characters
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
