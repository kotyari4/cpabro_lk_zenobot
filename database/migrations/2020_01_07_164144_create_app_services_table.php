<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_services', function (Blueprint $table) {

            $table->bigIncrements('id');

            // Привязка к настройкам
            $table->unsignedBigInteger('app_settings_id');

            // Тип поля
            // 1 - Текстовое поле
            $table->integer('type')->default(1);

            // Название услуги
            $table->string('service_name');

            // Иконка услуги
            $table->string('icon')->default('icon_service_default.png');

            $table->float('service_amount', '8', '2');
            $table->float('service_discount', '8', '2')->nullable();

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
        Schema::dropIfExists('app_services');
    }
}
