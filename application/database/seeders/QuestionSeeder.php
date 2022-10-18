<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = [4, 5, 4, 5, 4];
        $body = [
            "Let's do project better than yesterday", "hello, I trust you", "good job", "heyy... lucky for you", "hope to do everything well"
        ];

        for ($i = 0; $i < count($body); $i++) {
            \DB::table('questions')->insert([
                'id' => $i + 1,
                'user_id' => $user_id[$i],
                'body' => $body[$i],
            ]);
        }
    }
}
