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
        Schema::table('shows', function (Blueprint $table) {
            //
            $table->dropColumn('price'); // Supprimer la colonne price
            $table->unsignedSmallInteger('duration')->nullable(); // Ajouter la colonne duration
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shows', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->nullable(); 
            $table->dropColumn('duration'); 
        });
    }
};
