<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('id'); // ID юзера
            $table->integer('parent_user'); // ID родтельского юзера
            $table->string('name'); // Имя юзера
            $table->unsignedBigInteger('role_id'); // Роль юзера
            $table->string('email')->unique(); // Email юзера
            $table->string('email_verified_code'); // Код подтверждения Email юзера
            $table->string('password'); // Пароль
            $table->integer('enable')->default(0); // Активация юзера
            $table->rememberToken(); // Токен авторизации

            $table->integer('email_verified_at')->nullable(); // дата верификации Email
            $table->integer('created_at')->nullable(); // Дата создания
            $table->integer('updated_at')->nullable(); // Дата изменения
            $table->integer('deleted_at')->nullable(); // Дата удаления

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
        Schema::dropIfExists('users');
    }
}
