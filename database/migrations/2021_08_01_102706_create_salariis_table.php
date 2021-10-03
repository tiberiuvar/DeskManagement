<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salariis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Salariati_id');
            $table->string('Salariu_brut');
            $table->string('Salariu_net');
            $table->string('Luna');
            $table->integer('An');
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
        Schema::dropIfExists('salariis');
    }
}
