<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('documentos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre');
        $table->string('tipoDoc');
        $table->integer('id_unidad')->unsigned();
        $table->foreign('id_unidad')->references('id')->on('unidades')->onDelete('set null');
        $table->string('tipoSolicitante');
        $table->integer('rut_responsable')->unsigned();
        $table->foreign('rut_responsable')->references('rut')->on('responsables')->onDelete('set null');
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
        //
    }
}
