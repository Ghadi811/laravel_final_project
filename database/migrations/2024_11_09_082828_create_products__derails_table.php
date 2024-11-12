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
        Schema::create('products__derails', function (Blueprint $table) {
            $table->id();
            $table->integer('id_products');
            $table->double('price');
            $table->integer( 'qty');
            $table->string('image',250);
            $table->string( 'color',150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products__derails');
    }
};
