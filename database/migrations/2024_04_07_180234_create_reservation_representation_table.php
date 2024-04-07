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
        Schema::create('reservation_representation', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
            
                $table->foreignId('reservation_id');
                $table->foreignId('representation_id');
                $table->foreignId('price_id');
                $table->smallInteger('quantity');
                
                $table->foreign('reservation_id')->references('id')->on('reservations')
                        ->onDelete('restrict')->onUpdate('cascade');
                $table->foreign('representation_id')->references('id')->on('representations')
                        ->onDelete('restrict')->onUpdate('cascade');
                $table->foreign('price_id')->references('id')->on('prices')
                        ->onDelete('restrict')->onUpdate('cascade');       
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_representation');
    }
};
