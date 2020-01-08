<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_clients', function (Blueprint $table) {

            $table->bigIncrements('id');

            // Привязка к настройкам
            $table->unsignedBigInteger('app_settings_id');

            // Имя
            $table->string('first_name');

            // Фамилия
            $table->string('last_name');

            // Email
            $table->string('email')->unique();

            // Телефон
            $table->string('phone')->unique();

            // Радиус колес
            $table->string('wheel_radius');

            // VIN Автомобиля
            $table->string('auto_vin');

            $table->timestamps();

            $table->foreign('app_settings_id')->references('id')->on('app_settings');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_clients');
    }
}
