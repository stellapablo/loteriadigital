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
            $table->string('tipo_documento')->index();
            $table->date('fecha_documento');
            $table->integer('tomo');
            $table->integer('nro_documento');
            $table->text('archivo')->nullable();
            $table->text('tema')->nullable();
            $table->text('detalle')->nullable();
            $table->string('tags')->index();
            $table->integer('store_id')->index();
            $table->integer('tag_id')->index()->nullable();
            $table->integer('user_id')->index();
            $table->timestamps();
            $table->softDeletes();
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
