<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            "duong",
            "hai",
            "admin"
        ];
        $email = [
            "duong@gmail.com", "hai@gmail.com", "admin@gmail.com"
        ];
        $phone = [
            "1234567891",
            "2345678987",
            "1236578456"
        ];
        $password = [bcrypt('duong123'), bcrypt('hai123'), bcrypt('admin123')];
        $type = [1, 1, 1];
        for ($i = 0; $i < count($name); $i++) {
            \DB::table('users')->insert([
                'id' => $i + 1,
                'name' => $name[$i],
                'email' => $email[$i],
                'phone' => $phone[$i],
                'password' => $password[$i],
                'type' => $type[$i],
            ]);
        }
    }
}
