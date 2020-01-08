<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Запускаем фабрику и генерируем 10 юзеров
        factory(\App\Models\User::class, 10)->create()->each(function ($user){

            // Запускаем фабрику и добавляем настройки приложений с привязкой по ID юзера
            $app_setting = $user->appSettings()->save(
                factory(App\Models\AppSettings::class)->make()
            );

            // Запускаем фабрику и добавляем и привязываем по 100 клиентов к каждой настройке
            factory(\App\Models\AppClients::class, 100)->make()->each(function($app_clients) use ($app_setting){
                $app_clients->app_settings_id = $app_setting->id;
                $app_clients->save();
            });

            // Запускаем фабрику и добавляем и привязываем по 100 клиентов к каждой настройке
            factory(\App\Models\AppServices::class, 10)->make()->each(function($app_services) use ($app_setting){
                $app_services->app_settings_id = $app_setting->id;
                $app_services->save();
            });

        })->toArray();

    }
}
