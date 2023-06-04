<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionUisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcion__uis', function (Blueprint $table) {
        
            
            $table->integer('funcion_id')->foreign()->references('id')->on('funcions');
            $table->integer('ui_id')->foreign()->references('id')->on('uis');
            
        });
        DB::table('funcion_uis')->insert
        (
            [
                ['funcion_id'=>1,'ui_id'=>1],
                ['funcion_id'=>2,'ui_id'=>2],
                ['funcion_id'=>3,'ui_id'=>3],
                ['funcion_id'=>4,'ui_id'=>4],
                ['funcion_id'=>5,'ui_id'=>5],
                ['funcion_id'=>6,'ui_id'=>1],
                /*['funcion_id'=>1,'ui_id'=>1],
                ['funcion_id'=>1,'ui_id'=>1],
                ['funcion_id'=>1,'ui_id'=>1],*/
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
        Schema::dropIfExists('funcion__uis');
    }
}
