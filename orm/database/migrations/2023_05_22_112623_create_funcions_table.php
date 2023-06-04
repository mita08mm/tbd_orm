<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcions', function (Blueprint $table) {
            $table->id();
            $table->string('nombreF');
            $table->boolean('estado');
        });
        DB::table('funcions')->insert(
            [
                ['nombreF' => 'Realizar prestamos'                 , 'estado' => true],
                ['nombreF' => 'Registrar devoluciones'             , 'estado' => true],
                ['nombreF' => 'Solicitar prestamo'                 , 'estado' => true],
                ['nombreF' => 'Devolver el prestamo'               , 'estado' => true],
                ['nombreF' => 'Visualir prestamos'                 , 'estado' => true],
                ['nombreF' => 'VIsualizar regristro de estudiantes', 'estado' => true], 
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcions');
    }
}
