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
        Schema::create('big_three_items', function (Blueprint $table) {
            $table->id();
            $table->string('internalId');
            $table->string('itemNumber')->nullable();
            $table->string('abcSap')->nullable();
            $table->string('abcStatus')->nullable();
            $table->string('cardinalCin')->nullable();
            $table->string('cardinalStatus')->nullable();
            $table->string('mckEcono')->nullable();
            $table->string('mckStatus')->nullable();
            $table->string('mmsStatus')->nullable();
            $table->string('mmsEcono')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('big_three_items');
    }
};
