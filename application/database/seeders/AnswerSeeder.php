<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = [5, 4, 5, 4, 5, 5];
        $question_id = [1, 2, 3, 4, 5, 4];
        $body = [
            "Yeeee... I think so", "Thank you", "Yessss", "hahaha", "okkk let go", "hihihi"
        ];

        for ($i = 0; $i < count($body); $i++) {
            \DB::table('answers')->insert([
                'id' => $i + 1,
                'user_id' => $user_id[$i],
                'question_id' => $question_id[$i],
                'body' => $body[$i],
            ]);
        }
    }
}
