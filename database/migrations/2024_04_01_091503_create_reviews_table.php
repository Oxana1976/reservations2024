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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('show_id')->nullable();
            $table->text('review')->nullable();
            $table->tinyInteger('stars');
            $table->tinyInteger('validated');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable(); 

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('restrict')->onUpdate('cascade');

            $table->foreign('show_id')->references('id')->on('shows')
            ->onDelete('restrict')->onUpdate('cascade');
        });
    }

   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
