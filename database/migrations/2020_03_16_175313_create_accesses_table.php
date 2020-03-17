<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesses', function (Blueprint $table) {

            $table->bigIncrements('id'); // ID доступов

            $table->unsignedBigInteger('user_id'); // ID юзера
            $table->unsignedBigInteger('role_id'); // ID Настроек

            $table->jsonb('privileges')->nullable();  // доступы

            $table->integer('created_at')->nullable();  // Дата создания
            $table->integer('updated_at')->nullable();  // Дата изменения
            $table->integer('deleted_at')->nullable();  // Дата удаления

            $table->foreign('role_id')->references('id')->on('roles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesses');
    }
}
