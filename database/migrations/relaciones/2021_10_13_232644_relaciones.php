<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solicitud', function (Blueprint $table) {
            $table->foreign('responsable')->references('id')->on('users');

        });

        Schema::table('detalle_solicitud', function (Blueprint $table) {
            $table->foreign('solicitud')->references('id')->on('solicitud');

        });

        Schema::table('solicitud', function (Blueprint $table) {
            $table->foreign('categoria')->references('id')->on('categoria');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
