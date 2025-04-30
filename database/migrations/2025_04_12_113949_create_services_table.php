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
    Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('titre', 50);
        $table->string('localisation', 200);
        $table->string('duree', 50);
        $table->string('type', 50);
        $table->text('description');
        $table->string('depart', 255);
        $table->string('arrivee', 255);
        $table->dateTime('dateDepart');
        $table->time('heureRetour');
        $table->text('inclusion');
        $table->text('nonInclus');
        $table->string('destination')->nullable();
        $table->text('plan');
        $table->text('galerie');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
