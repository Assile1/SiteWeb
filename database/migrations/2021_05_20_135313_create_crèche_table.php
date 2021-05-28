<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrècheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enfant', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prènom');
            $table->Date('Date_de_naissance');
            $table->string('Sexe');
            $table->string('Adresse');
            $table->string('Groupe_ sanguin');
            $table->string('Vaccin');
            $table->string('Maladie');
            $table->string('Régime_ spéciale');
            $table->string('Cas_ particulier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Enfant');
    }
}
