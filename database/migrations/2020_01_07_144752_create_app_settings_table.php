<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_settings', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');

            // Логотип компании
            $table->string('logo');

            // Название компании
            $table->string('company_name')->unique();

            // Адрес сайта
            $table->string('url_site')->unique();

            // Уникальный код
            $table->string('code')->unique();

            // Куда отправлять заявки
            /**
             * 1 - на почту
             * 2 - на URL + почту
             * 3 - на телефон
             */
            $table->integer('where_to_send')->default(1);

            // Order Email
            $table->string('order_email')->nullable();

            // Order Phone
            $table->string('order_phone')->nullable();

            // Order URL
            $table->string('order_url')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_settings');
    }
}
