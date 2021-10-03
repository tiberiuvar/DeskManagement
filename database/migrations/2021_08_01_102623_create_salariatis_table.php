<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salariatis', function (Blueprint $table) {
            $table->id();
            $table->string('Nume');
            $table->string('Prenume');
            $table->string('Email');
            $table->date('Data_de_nastere');
            $table->foreignID('departamentes_id')->constrained();
            $table->foreignID('birouris_id')->constrained();    
            $table->string('Manager');       
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
        Schema::dropIfExists('salariatis');
    }
}
