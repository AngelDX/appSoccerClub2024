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
        Schema::create('squads', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->date('birthdate');
            $table->string('number');
            $table->enum('type',['Jugador','Comando técnico','Staff']);
            $table->unsignedBigInteger('position_id');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('squads');
    }
};
