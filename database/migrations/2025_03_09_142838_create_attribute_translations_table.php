<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attribute_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('attribute_id');
            $table->string('locale');
            $table->string('name');
            $table->timestamps();

            $table->unique(['attribute_id', 'locale']);
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
        });

        // Migrar os dados existentes
        DB::statement('INSERT INTO attribute_translations (attribute_id, locale, name, created_at, updated_at) 
            SELECT id, "pt_BR", name, NOW(), NOW() FROM attributes');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_translations');
    }
};
