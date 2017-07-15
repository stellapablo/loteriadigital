<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTagsTable extends Migration
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
            $table->string('tipo_documento')->index();
            $table->date('fecha_documento');
            $table->integer('tomo');
            $table->integer('nro_documento');
            $table->text('archivo')->nullable();
            $table->text('detalle')->nullable();
            $table->string('hash')->nullable();
            $table->integer('store_id')->index();
            $table->integer('user_id')->index();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->index();
            $table->timestamps();
        });

        Schema::create('documento_tag', function (Blueprint $table) {
            $table->integer('documento_id');
            $table->integer('tag_id');
            $table->primary(['documento_id','tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('documento_tag');

    }
}
