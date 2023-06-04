<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->integer ('usern_id')->foreingn()->references('id')->on('userns');             
            $table->integer ('comp_id')->foreingn()->references('id')->on('computadoras');              
            $table->string ('dev_id')->foreingn()->references('id')->on('devolucions');               
            
            $table->string ('fechaprestamo');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
