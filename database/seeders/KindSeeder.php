<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_name = [
            "Family", "House", "Animals", "Drinks", "Flowers", "Vegetables", "Weather", "Colors", "School", "Human Body",
            "Food", "Hobbies", "Holiday", "Traffic", "Travel", "Education", "Relationship", "Emotions", "Culture", "Skills", "Sports",
            "Technology", "Office Life", "Fashion", "Life", "Health", "Entertainment", "Art", "Law", "Beauty", "Computers and Networks",
        ];
        $level = [
            "1", "1", "1", "1", "1", "1", "1", "1", "1", "1",
            "2", "2", "2", "2", "2", "2",  "2", "2", "2", "2", "2",
            "3", "3", "3", "3", "3", "3", "3", "3", "3", "3"
        ];
        for ($i = 0; $i < count($kind_name); $i++) {
            \DB::table('kinds')->insert([
                'kind_name' => $kind_name[$i],
                'level' => $level[$i]
            ]);
        }
    }
}
