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
            "Family",
            "House",
            "Animals",
            "Plants",
            "Fruits",
            "Vegetables",
            "Weather",
            "Colors",
            "Relationships",
            "Clothing",
            "Sports",
            "Education"
        ];
        $level = [
            "1", "1", "1", "1", "1", "1", "1", "1", "2", "2", "2"
        ];
        for ($i = 0; $i < count($kind_name); $i++) {
            \DB::table('kinds')->insert([
                'kind_name' => $kind_name[$i],
                'level' => $level[$i]
            ]);
        }
    }
}
