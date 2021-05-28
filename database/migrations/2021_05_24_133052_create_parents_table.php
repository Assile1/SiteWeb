<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('Photo');
            $table->string('Nom');
            $table->string('Prènom');
            $table->string('Adresse');
            $table->integer('N°Tel');
            $table->string('Profession');
            $table->string('Email');
            $table->string('Nom_Autre_Résponsable');
            $table->string('Prènom_Autre_Résponsable');
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
        Schema::dropIfExists('parents');
    }
}
