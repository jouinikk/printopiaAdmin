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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Type_id');
            $table->foreign('Type_id')->references('id')->on('TypeProduit')->onDelete('cascade');
            $table->string('image');
            $table->integer('qttProduit');
            $table->float('prixProduit');
            $table->text('description');
            $table->string('formeP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
