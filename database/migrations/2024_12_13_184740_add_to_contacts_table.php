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
        Schema::table('contacts', function (Blueprint $table) {
           $table->text('fname')->nullable();
            $table->text('lname')->nullable();
            $table->text('age')->nullable();
            $table->text('gender')->nullable();
            $table->text('whatsapp')->nullable();
            $table->text('telegram')->nullable();
            $table->text('course')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
};
