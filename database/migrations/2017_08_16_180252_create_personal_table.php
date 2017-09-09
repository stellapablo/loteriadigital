<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->increments('id');
            $table->text('dni');
            $table->text('apellido');
            $table->text('nombre');
            $table->text('lugar');
            $table->timestamps();
            $table->softDeletes();
        });zxvbn

        Schema::create('rrhh_documento', function (Blueprint $table) {
            $table->increments('id');
            $table->text('detalle')->nullable();
            $table->integer('personal_id')->index();
            $table->text('archivo')->nullable();
            $table->integer('store_id')->index();
            $table->integer('user_id')->index();
            $table->integer('seccion_id')->index();
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
        Schema::dropIfExists('personal');

        Schema::dropIfExists('rrhh_documento');

    }
}
