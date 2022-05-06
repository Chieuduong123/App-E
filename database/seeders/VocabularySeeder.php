<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VocabularySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_id = [
            "1", "1", "1", "1", "2", "2", "2", "2"
        ];
        $word = [
            "Mother",
            "Father", 
             "Brother", 
             "Daughter ", 
             "Bedroom ", 
             "Garden ", 
             "Kitchen", 
             "Living room", 
        
        ];
        $type_word = [
            "noun",
            "noun",
            "noun",
            "noun",
            "noun",
            "noun",
            "noun",
            "noun",
        ];

        $phonetic = [
            "/ˈmʌðə(ɹ)//",
            "/ˈfɑːðə(ɹ)//",
            "/ˈbrʌðər//",
            "/ˈdɔtər//",
            "/ˈbɛˌdrum//",
            "/ˈgɑrdən//",
            "/ˈkɪʧən//",
            "/ˈlɪvɪŋ rum//",

        ];

        $audio = [
            "https://api.dictionaryapi.dev/media/pronunciations/en/mother-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/father-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/brother-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/daughter-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/bedroom-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/garden-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/kitchen-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/living-uk.mp3",
            
        ];

        $definition = [
            "A (human) female who has given birth to a baby",
            "A (generally human) male who begets a child.",
            "Son of the same parents as another person",
            "One’s female offspring",
            "A room in a house where a bed is kept for sleeping",
            "An outdoor area containing one or more types of plants, usually plants grown for food or ornamental purposes",
            "A room or area for preparing food",
            "A room in a private house used for general social and leisure activities."

        ];
        for ($i = 0; $i < count($kind_id); $i++) {
            \DB::table('vocabularies')->insert([
                'kind_id' => $kind_id[$i],
                'word' => $word[$i],
                'type_word' => $type_word[$i],
                'phonetic' => $phonetic[$i],
                'audio' => $audio[$i],
                'definition' => $definition[$i],
            ]);
        }
    }
    }

