<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsernRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usern__rols', function (Blueprint $table) {
            
            $table->dateTime('fechainicio')->primary();
            $table->dateTime('fechafin');
            
            $table->integer('usern_id')->foreign()->references('id')->on('userns');

            $table->integer('rol_id')->foreingn()->references('id')->on('rols');            
        });
        DB::table('usern_rols')->insert
        (
            [
                ['usern_id'=>1,'rol_id'=>1],
                ['usern_id'=>2,'rol_id'=>1],
                ['usern_id'=>3,'rol_id'=>1],
                ['usern_id'=>4,'rol_id'=>1],
                ['usern_id'=>5,'rol_id'=>2],
                ['usern_id'=>6,'rol_id'=>2],
                ['usern_id'=>7,'rol_id'=>3],


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
        Schema::dropIfExists('usern__rols');
    }
}
