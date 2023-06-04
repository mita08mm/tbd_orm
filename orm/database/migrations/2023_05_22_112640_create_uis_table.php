<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uis', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUI');
            $table->boolean('estadoUI');
        });
        DB::table('uis')->insert
        (
            [

                ['nombreUI'=>'prestamo','estado'            =>true ],
                ['nombreUI'=>'catalogo','estado'            =>true ],
                ['nombreUI'=>'lista-estudiantes','estado'   =>true ],
                ['nombreUI'=>'devolucion','estado'          =>true ],
                ['nombreUI'=>'asignar-computadoras','estado'=>true ],

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
        Schema::dropIfExists('uis');
    }
}
