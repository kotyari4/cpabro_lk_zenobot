<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $names = ['Аня', 'Петя', 'Маша', 'Саша', 'Миша', 'Гриша', 'Коля', 'Катя', 'Вова', 'Женя', 'Денис'];

        $data[] = [
            'name' => 'Вася',
            'email' => 'test@mail.com',
            'phone' => '79999999990',
            'password' => bcrypt('000000')
        ];

        for($i = 1; $i <= 7; $i++){

            $data[] = [
                'name' => $names[$i],
                'email' => "test{$i}@mail.com",
                'phone' => "7999999999{$i}",
                'password' => bcrypt("0{$i}0{$i}0{$i}")
            ];

        }

        DB::table('users')->insertGetId($data);

    }
}
