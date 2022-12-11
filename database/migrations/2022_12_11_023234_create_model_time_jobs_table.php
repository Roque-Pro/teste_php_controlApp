<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_work', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_employee')->unsigned();
            $table->foreign('id_employee')->references(columns:'id')->on(table:'employee')->onDelete(action: 'cascade')->onUpdate(action: 'cascade');
            $table->time('totalHorario');
            $table->time('totalHorarioDiurno');
            $table->time('totalHorarioNoturno');
            $table->double('valorHora');
            $table->rememberToken();
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
        Schema::dropIfExists('time_work');
    }
};
