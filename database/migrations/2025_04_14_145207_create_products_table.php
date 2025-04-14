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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('internal_id')->nullable();
            $table->string('item_number')->nullable();
            $table->string('upc_code')->nullable();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->string('box_color')->nullable();
            $table->string('brand')->nullable();
            $table->string('subsidiary')->nullable();
            $table->string('class')->nullable();
            $table->string('ndc_number')->nullable();
            $table->string('discontinued')->nullable();
            $table->string('vial_type')->nullable();
            $table->string('vial_dram')->nullable();
            $table->string('vial_color')->nullable();
            $table->string('lid_type')->nullable();
            $table->string('volume')->nullable();
            $table->string('needle_length')->nullable();
            $table->string('gauge')->nullable();
            $table->integer('units_per_retail_box')->nullable();
            $table->integer('retail_boxes_per_middle_case')->nullable();
            $table->integer('middle_cases_per_shipping_case')->nullable();
            $table->integer('retail_boxes_per_shipping_case')->nullable();
            $table->string('upc_number_retail_box')->nullable();
            $table->string('upc_number_middle_case')->nullable();
            $table->string('upc_number_shipping_case')->nullable();
            $table->float('item_length',8,2)->nullable();
            $table->float('item_width',8,2)->nullable();
            $table->float('item_height',8,2)->nullable();
            $table->float('item_weight',8,2)->nullable();
            $table->longText('information_download')->nullable();
            $table->string('product_link')->nullable();
            $table->boolean('display')->default('0');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
