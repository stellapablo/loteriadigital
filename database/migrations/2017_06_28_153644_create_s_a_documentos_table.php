<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSADocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sec_admin_documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_documento')->index();
            $table->date('fecha_documento');
            $table->integer('tomo');
            $table->integer('nro_documento');
            $table->text('detalle');
            $table->text('archivo');
            $table->integer('store_id')->index();
            $table->integer('tag_id')->index();
            $table->integer('user_id')->index();
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
        Schema::dropIfExists('sec_admin_documentos');
    }
}
