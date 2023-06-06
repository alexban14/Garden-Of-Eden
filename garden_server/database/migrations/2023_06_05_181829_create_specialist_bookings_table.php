<?php

use App\Enums\Specialists;
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
        Schema::create('specialist_bookings', function (Blueprint $table) {
            $table->id();
            $table->enum('specialist', [Specialists::Ana_Maria_Baltesiu, Specialists::Eugen_Giurgiu, Specialists::Gabriel_Dumitrescu]);
            $table->date('date');
            $table->time('time');
            $table->foreignId('user_id');
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialist_bookings');
    }
};
