<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {

            $table->bigIncrements('id'); // ID Роли

            $table->string('name'); // Название роли

            $table->integer('created_at')->nullable(); // Дата создания
            $table->integer('updated_at')->nullable();  // Дата изменения
            $table->integer('deleted_at')->nullable();  // Дата удаления

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
