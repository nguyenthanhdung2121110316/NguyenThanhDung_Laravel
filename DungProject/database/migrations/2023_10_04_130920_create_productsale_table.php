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
        Schema::create('db_productsale', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_id');
            $table->double('pricesale');
            $table->unsignedTinyInteger('qty');
            $table->date('date_begin');
            $table->date('date_end');

            $table->unsignedInteger('created_by');
            $table->unsignedInteger('update_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_productsale');
    }
};
