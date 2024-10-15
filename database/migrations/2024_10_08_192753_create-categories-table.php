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
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('category');
        $table->timestamps(); // Optional but recommended for created_at and updated_at fields
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
