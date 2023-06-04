<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolFuncionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol__funcions', function (Blueprint $table) {
            
            $table->integer('rol_id')->foreingn()->references('id')->on('rols');            
                        
            $table->integer('funcion_id')->foreingn()->references('id')->on('funcions');            
        });
        DB::table('rol__funcions')->inser
        (
            [
                ['rol_id'=>1,'funcion_id'=>1],
                ['rol_id'=>1,'funcion_id'=>2],
                ['rol_id'=>1,'funcion_id'=>3],
                ['rol_id'=>2,'funcion_id'=>4],
                ['rol_id'=>2,'funcion_id'=>5],
                ['rol_id'=>2,'funcion_id'=>6],
                ['rol_id'=>3,'funcion_id'=>1],
                ['rol_id'=>3,'funcion_id'=>2],
                ['rol_id'=>3,'funcion_id'=>3],
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
        Schema::dropIfExists('rol__funcions');
    }
}
