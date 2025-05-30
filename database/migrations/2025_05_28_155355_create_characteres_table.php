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
        Schema::create('characteres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('height');
            $table->string('hair_color');
            $table->string('age');
            $table->unsignedBigInteger('nen_type_id')->nullable();
            $table->foreign('nen_type_id')->references('id')->on('nen_types')->onDelete('set null');
            $table->unsignedBigInteger('acr_id')->nullable();
            $table->foreign('acr_id')->references('id')->on('arcs')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characteres');
    }
};
