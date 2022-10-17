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
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 200);
            $table->integer('edad');
            $table->date('feNacimiento');
            $table->unsignedBigInteger('idEquipo');

            $table->foreign('idEquipo')
            ->references('id')
            ->on('equipos')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

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
        Schema::dropIfExists('miembros');
    }
};
