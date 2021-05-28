<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsycholoquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psycholoques', function (Blueprint $table) {
            $table->id();
             $table->string('Nom');
            $table->string('Prènom');
            $table->string('Age');
            $table->integer('N°Tel');
            $table->string('Salaire');
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
        Schema::dropIfExists('psycholoques');
    }
}
