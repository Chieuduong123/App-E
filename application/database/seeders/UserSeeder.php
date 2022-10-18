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
            "admin",
            "anhduong",
            "anhvan"
        ];
        $email = [
            "duong@gmail.com", "hai@gmail.com", "admin@gmail.com", "anhduong@gmail.com", "anhvan@gmail.com"
        ];
        $phone = [
            "1234567891",
            "2345678987",
            "1236578456",
            "1231234567",
            "2342123456",
        ];
        $password = [bcrypt('duong123'), bcrypt('hai123'), bcrypt('admin123'), bcrypt('anhduong123'), bcrypt('anhvan123')];
        // $type = [1, 1, 1, 2, 2];
        $is_admin = [true, true, true, false, false];
        $is_online = [true, true, true, true, true];
        for ($i = 0; $i < count($name); $i++) {
            \DB::table('users')->insert([
                'id' => $i + 1,
                'name' => $name[$i],
                'email' => $email[$i],
                'phone' => $phone[$i],
                'password' => $password[$i],
                'is_admin' => $is_admin[$i],
                'is_online' => $is_online[$i],
            ]);
        }
    }
}
