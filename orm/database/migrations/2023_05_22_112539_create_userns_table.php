<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsernsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userns', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('password');
        });

        DB::table('userns')->insert(
            [
                ['usuario' => 'Aron', 'password' => '1234'],
                ['usuario' => 'Juan', 'password' => '1234'],
                ['usuario' => 'Mita', 'password' => '1234'],
                ['usuario' => 'Leo', 'password' => '1234'],
                ['usuario' => 'Ana', 'password' => '1234'],
                ['usuario' => 'Pedro', 'password' => '1234'],
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
        Schema::dropIfExists('userns');
    }
}
