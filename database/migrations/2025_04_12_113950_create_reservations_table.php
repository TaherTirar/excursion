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
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->string('nomClient', 50);
        $table->string('prenomClient', 50);
        $table->string('telephoneClient', 50);
        $table->string('emailClient', 255);
        $table->string('NBadulte');
        $table->string('NBenfant');
        $table->date('date');
        $table->text('message');
        $table->float('prixTotal');
        $table->integer('titreService');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
