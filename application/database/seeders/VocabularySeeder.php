<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1",
            "2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2",
            "3", "3", "3", "3", "3", "3", "3", "3", "3", "3", "3", "3", "3", "3", "3",
            "4", "4", "4", "4", "4", "4", "4",
            "5", "5", "5", "5", "5", "5", "5",
            "6", "6", "6", "6", "6", "6", "6",
            "11", "11", "11", "11", "11", "11", "11", "11", "11", "11",
            "12", "12", "12", "12", "12", "12",
            "13", "13", "13", "13", "13", "13",
            "22", "22", "22", "22", "22", "22", "22", "22", "22", "22",
            "23", "23", "23", "23", "23", "23", "23", "23", "23", "23",
            "24", "24", "24", "24", "24", "24", "24", "24", "24", "24",

        ];
        $word = [
            "Mother", "Father", "Brother", "Daughter", "Grandfather", "Grandmother", "Aunt", "Uncle", "Spouse ", "Husband",
            "Wife", "Child", "Grandson", "Nephew", "Niece",

            "Apartment", "Flat", "Palace", "Tent", "Villa", "Basement", "Bathroom", "Bedroom", "Cellar", "Garage", "Garden",
            "Hall", "Kitchen", "Landing", "Lavatory",

            "Dog", "Cat", "Chick", "Turkey", "Camel", "Bull", "Cow", "Calf", "Duck", "Parrot", "Lion", "Elephant", "Squirrel",
            "Bear", "Panda",

            "Wine", "Lager", "Vodka", "Whisky", "Cider", "Cocktail", "Coffee",

            "Flower", "leaf", "root", "stem", "daisy", "rose", "tulip",

            "Corn", "Beetroot", "Marrow", "Cucumber", "Beetroot", "Shallot", "Eggplant",

            "Donut", "Mustard", "Pancake", "Pastry", "Noodle", "Sausage", "Salami", "Ham", "Snacks", "Soup",

            "Swimming", "Knit", "Sing", "Sleep", "Travel", "Chess",

            "itinerary", "deposit", "complimentary", "itinerary", "transfer", "ticket",

            "Abacus", "Computer", "Device", "Disk", "Hardware", "Memory", "Software", "Equipment", "Keyboard", "Screen",

            "Paper", "Envelope", "File", "Reporter", "Staple", "Pen", "Calculator", "Tape", "Ink", "Printer",

            "Dress", "Skirt", "Princess", "Jumper", "Blazer", "Overcoat", "Suit", "Jeans", "Tie", "Sweater",


        ];
        $type_word = [
            "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun",

            "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun",

            "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun", "noun",

            "noun", "noun", "noun", "noun", "noun", "noun", "noun",

            "noun", "noun", "noun", "noun", "noun", "noun", "noun",

            "noun", "noun", "noun", "noun", "noun", "noun", "noun",

            "noun", "noun", "noun", "noun", "noun", "noun", "noun",  "noun", "noun", "noun",

            "noun", "noun", "noun", "verb", "noun", "noun",

            "noun", "noun", "adjective", "noun", "noun", "noun",

            "noun", "noun", "noun", "noun", "noun", "noun", "noun",  "noun", "noun", "noun",

            "noun", "noun", "noun", "noun", "noun", "noun", "noun",  "noun", "noun", "noun",

            "noun", "noun", "noun", "noun", "noun", "noun", "noun",  "noun", "noun", "noun",
        ];

        $phonetic = [
            "/ˈmʌðə(ɹ)/ ", "/ˈfɑːðə(ɹ)/ ", "/ˈbrʌðər/ ", "/ˈdɔtər/ ", "/ˈɡrænfɑːðə(r)/ ", "/ˈɡɹæn(d)ˌmʌðə(r)/ ", "/ɑ(ː)nt/ ",
            "/ˈʌŋ.kəl/ ", "/spaʊs/ ", "/ˈhʌz.bənd/ ", "/waɪf/ ", "/t͡ʃaɪld/ ", "/ˈɡɹæn(d)sʌn/ ", "/ˈnɛf.ju/ ", "/niːs/ ",

            "/əˈpɑːt.mənt/ ", "/flæt/ ", "/ˈpæləs/ ", "/tɛnt/ ", "/ˈvɪlə/ ", "/ˈbeɪsmənt/ ", "/ˈbæθ.ɹuːm/ ", "/ˈbɛdɹʊm/ ",
            "/ˈsɛlə(ɹ)/ ", "/ɡəˈɹɑː(d)ʒ/ ", "/ˈɡɑːdn̩/ ", "/hɔːl/ ", "/ˈkɪt͡ʃən/ ", "/ˈlændɪŋ/ ", "/ˈlæv.ə.təɹ.i/ ",

            "/dɑɡ/ ", "/kat/ ", "/t͡ʃɪk/ ", "/ˈtɜːki/ ", "/ˈkæməl/ ", "/ˈbʊl/ ", "/kaʊ/ ", "/kæf/ ", "/dʌk/ ", "/ˈpæɹət/ ",
            "/ˈlaɪən/ ", "/ˈɛləfənt/ ", "/ˈskwɪɹl̩/ ", "/bɛə(ɹ)/ ", "/ˈpændə/ ",

            "/waɪn/ ", "/ˈlɑːɡə/ ", "/ˈvɑdkə/ ", "/ˈwɪski/ ", "/ˈsaɪ̯.də/ ", "/ˈkɒkteɪl/ ", "/ˈkɑ.fi/ ",

            "/ˈflaʊ.ə/ ", "/liːf/ ", "/ɹuːt/ ", "/stɛm/ ", "/ˈdeɪ.zi/ ", "/ɹəʊz/ ", "/ˈt(j)uːlɪp/ ",

            "/kɔɹn/ ", "/ˈbiːtɹuːt/ ", "/ˈmæɹəʊ/ ", "/ˈkjuːˌkʌmbə/ ", "/ˈbiːtɹuːt/ ", "/ʃəˈlɒt/ ", " /ˈeɡ.plɑːnt/ ",

            "/ˈdoʊnət/ ", "[ˈmɐs.təd]", "/ˈpæn.keɪk/ ", "/ˈpeɪstɹi/ ", "/nuːdl̩/ ", "/ˈsɑsɪd͡ʒ/ ", "[səˈlɑːmɪ]", "/ˈhæːm/ ", "/snæk/ ", "/suːp/ ",

            "/ˈswɪmɪŋ/ ", "/ˈnɪt/ ", "/sɪŋ/ ", "/sliːp/ ", "/ˈtɹævəl/ ", "/t͡ʃɛs/ ",

            "/aɪˈtɪnəɹi/ ", "/dɪˈpɒzɪt/ ", "/ˌkɒmplɪ̈ˈmɛnt(ə)ɹi/ ", "/aɪˈtɪnəɹi/ ", "/ˈtɹænzfɜː/ ", "/ˈtɪkɪt/ ",

            "/-ˌsaɪ/ ", "/kəmˈpjuːtə/ ", "/dəˈvaɪs/ ", "/dɪsk/ ", "/ˈhɑːdˌwɛə/ ", "/ˈmɛm(ə)ɹi/ ", "/ˈsɑftˌwɛɹ/ ", "/ɪˈkwɪpmənt/ ", "/ˈkiːbɔːd/ ", "/skɹiːn/ ",

            "/ˈpeɪpə/ ", "/ˈɒn.və.ləʊp/ ", "/faɪl/ ", "/ɹɪˈpɔɹtɚ/ ", "/ˈsteɪ.pəl/ ", "/pɛn/ ", "/kæl.kjə.leɪ.təɹ/ ", "/teɪ̯p/ ", "/ɪŋk/ ", "/ˈpɹɪntə(ɹ)/ ",

            "/dɹɛs/ ", "/skɜːt/ ", "/pɹɪnˈsɛs/ ", "/dʒʊmpə/ ", "/ˈbleɪzə/ ", "/ˈəʊvəkəʊt/ ", "/s(j)uːt/ ", "/d͡ʒiːnz/ ", "/taɪ/ ", "/ˈswetə/ ",




        ];

        $audio = [
            "https://api.dictionaryapi.dev/media/pronunciations/en/mother-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/father-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/brother-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/daughter-uk.mp3",
            "https://api.dictionaryapi.dev/media/-+ ZXD/en/grandfather-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/grandmother-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/aunt-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/uncle-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/spouse-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/husband-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/wife-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/child-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/grandson-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/nephew-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/niece-us.mp3",

            "https://api.dictionaryapi.dev/media/pronunciations/en/apartment-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/flat-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/palace-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/tent-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/villa-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/basement-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/bathroom-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/bedroom-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/cellar-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/garage-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/garden-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/hall-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/kitchen-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/landing-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/lavatory-uk.mp3",

            "https://api.dictionaryapi.dev/media/pronunciations/en/dog-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/cat-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/chick-1-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/turkey-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/camel-1-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/bull-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/cow-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/calf-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/duck-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/parrot-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/lion-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/elephant-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/squirrel-ca.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/bear-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/panda-1-us.mp3",

            "https://api.dictionaryapi.dev/media/pronunciations/en/wine-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/lager-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/vodka-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/whisky-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/cider-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/cocktail-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/coffee-uk.mp3",


            "https://api.dictionaryapi.dev/media/pronunciations/en/flower-1-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/leaf-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/root-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/stem-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/daisy-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/rose-1-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/tulip-us.mp3",

            "https://api.dictionaryapi.dev/media/pronunciations/en/corn-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/beetroot-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/marrow-1-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/cucumber-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/beetroot-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/shallot-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/eggplant-au.mp3",

            "https://api.dictionaryapi.dev/media/pronunciations/en/donut-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/mustard-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/pancake-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/pastry-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/noodle-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/sausage-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/salami-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/ham-1-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/snack-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/soup-uk.mp3",

            "https://api.dictionaryapi.dev/media/pronunciations/en/swimming-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/knit-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/sing-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/sleep-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/travel-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/chess-us.mp3",

            "https://api.dictionaryapi.dev/media/pronunciations/en/itinerary-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/deposit-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/complimentary-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/itinerary-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/transfer-uk-verb.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/ticket-us.mp3",

            "https://api.dictionaryapi.dev/media/pronunciations/en/abacus-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/computer-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/device-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/disk-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/hardware-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/memory-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/software-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/equipment-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/keyboard-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/screen-au.mp3",

            "https://api.dictionaryapi.dev/media/pronunciations/en/paper-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/envelope-1-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/file-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/reporter-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/staple-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/pen.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/calculator-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/tape-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/ink-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/printer-au.mp3",

            "https://api.dictionaryapi.dev/media/pronunciations/en/dress-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/skirt-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/princess-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/jumper-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/blazer-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/overcoat-us.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/suit-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/jeans-uk.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/tie-au.mp3",
            "https://api.dictionaryapi.dev/media/pronunciations/en/sweater-us.mp3",

        ];

        $definition = [
            "A (human) female who has given birth to a baby",
            "A (generally human) male who begets a child.",
            "Son of the same parents as another person",
            "One’s female offspring",
            "A father of someone's parent.",
            "A mother of someone's parent.",
            "The sister or sister-in-law of one’s parent.",
            "The brother or brother-in-law of one’s parent.",
            "A person in a marriage or marital relationship.",
            "The master of a house; the head of a family; a householder.",
            "A married woman, especially in relation to her spouse.",
            "A person who has not yet reached adulthood, whether natural (puberty), cultural (initiation), or legal (majority)",
            "A son of one's child.",
            "A son of one's sibling, brother-in-law, or sister-in-law; either a son of one's brother (fraternal nephew) or a son of one's sister",
            "A daughter of one’s sibling, brother-in-law, or sister-in-law; either the daughter of one's brother (\"fraternal niece\"), or of one's sister (\"sororal niece\").",

            "A complete domicile occupying only part of a building, especially one for rent; a flat.",
            "An area of level ground.",
            "Official residence of a head of state or other dignitary, especially in a monarchical or imperial governmental system.",
            "A pavilion or portable lodge consisting of skins, canvas, or some strong cloth, stretched and sustained by poles, used for sheltering people from the weather.",
            "(plural \"villas\") A house, often larger and more expensive than average, in the countryside or on the coast, often used as a retreat.",
            "A floor of a building below ground level.",
            "A room containing a shower and/or bathtub, and (typically but not necessarily) a toilet.",
            "A room in a house where a bed is kept for sleeping.",
            "An enclosed underground space, often under a building, used for storage or shelter.",
            "A building (or section of a building) used to store a car or cars, tools and other miscellaneous items.",
            "An outdoor area containing one or more types of plants, usually plants grown for food or ornamental purposes.",
            "A corridor; a hallway.",
            "A room or area for preparing food.",
            "To descend to a surface, especially from the air.",
            "A vessel or fixture for washing, particularly:",

            "A mammal, Canis familiaris or Canis lupus familiaris, that has been domesticated for thousands of years, of highly variable appearance due to human breeding.",
            "An animal of the family Felidae:",
            "A young bird.",
            "The guinea fowl (family Numididae).",
            "A beast of burden, much used in desert areas, of the genus Camelus.",
            "An adult male of domesticated cattle or oxen.",
            "(properly) An adult female of the species Bos taurus, especially one that has calved.",
            "A young cow or bull.",
            "To quickly lower the head or body in order to prevent it from being struck by something.",
            "A kind of bird, many species of which are colourful and able to mimic human speech, of the order Psittaciformes or (narrowly) of the family Psittacidae.",
            "A big cat, Panthera leo, native to Africa, India and formerly much of Europe.",
            "A mammal of the order Proboscidea, having a trunk, and two large ivory tusks jutting from the upper jaw.",
            "Any of the rodents of the family Sciuridae distinguished by their large bushy tail.",
            "A large omnivorous mammal, related to the dog and raccoon, having shaggy hair, a very small tail, and flat feet; a member of family Ursidae.",
            "The red panda (Ailurus fulgens), a small raccoon-like animal of northeast Asia with reddish fur and a long, ringed tail.",

            "An alcoholic beverage made by fermenting the juice of grapes.",
            "A type of beer, brewed using a bottom-fermenting yeast.",
            "A clear distilled alcoholic liquor made from grain mash.",
            "An alcoholic liquor distilled from fermented grain and usually aged in oak barrels.",
            "An alcoholic, often sparkling (carbonated) beverage made from fermented apples; hard cider; apple cider",
            "A mixture of other substances or things.",
            "A beverage made by infusing the beans of the coffee plant in hot water.",


            "A colorful, conspicuous structure associated with angiosperms, frequently scented and attracting various insects, and which may or may not be used for sexual reproduction.",
            "The usually green and flat organ that represents the most prominent feature of most vegetative plants.",
            "The part of a plant, generally underground, that anchors and supports the plant body, absorbs and stores water and nutrients, and in some plants is able to perform vegetative reproduction.",
            "The stock of a family; a race or generation of progenitors.",
            "A wild flowering plant Bellis perennis of the Asteraceae family, with a yellow head and white petals",
            "A shrub of the genus Rosa, with red, pink, white or yellow flowers.",
            "A type of flowering plant, genus Tulipa.",

            "The main cereal plant grown for its grain in a given region, such as oats in parts of Scotland and Ireland, and wheat or barley in England and Wales.",
            "Beta vulgaris, a plant with a swollen root which is eaten or used to make sugar.",
            "The substance inside bones which produces blood cells.",
            "A vine in the gourd family, Cucumis sativus.",
            "Beta vulgaris, a plant with a swollen root which is eaten or used to make sugar.",
            "A vegetable in the onion family.",
            "The plant Solanum melongena.",

            "A deep-fried piece of dough or batter, commonly made in a toroidal or ellipsoidal shape, and mixed with various sweeteners and flavors, sometimes filled with jelly, custard or cream.",
            "A plant of certain species of the genus Brassica, or of related genera (especially Sinapis alba, in the family Brassicaceae, with yellow flowers, and linear seed pods).",
            "A thin batter cake fried in a pan or on a griddle in oil or butter.",
            "A baked food item made from flour and fat pastes such as pie crust; also tarts, bear claws, napoleons, puff pastries, etc.",
            "(usually in the plural) a string or strip of pasta",
            "A food made of ground meat (or meat substitute) and seasoning, packed in a section of the animal's intestine, or in a similarly cylindrical shaped synthetic casing; a length of this food.",
            "A large cured meat sausage of Italian origin, served in slices.",
            "The region back of the knee joint; the popliteal space; the hock.",
            "An item of food eaten between meals.",
            "Any of various dishes commonly made by combining liquids, such as water or stock with other ingredients, such as meat and vegetables, that contribute flavor and texture.",

            "The act or art of sustaining and propelling the body in water.",
            "A knitted garment.",
            "A gathering at which people sing songs.",
            "To rest in a state of reduced consciousness.",
            "The act of traveling; passage from place to place.",
            "A board game for two players with each beginning with sixteen chess pieces moving according to fixed rules across a chessboard with the objective to checkmate the opposing king.",

            "A written schedule of activities for a vacation or road trip.",
            "Sediment or rock that is not native to its present location or is different from the surrounding material. Sometimes refers to ore or gems.",
            "In the nature of a compliment.",
            "A written schedule of activities for a vacation or road trip.",
            "The act of conveying or removing something from one place, person or thing to another.",
            "A pass entitling the holder to admission to a show, concert, etc.",

            "A table or tray scattered with sand which was used for calculating or drawing.",
            "A person employed to perform computations; one who computes.",
            "Any piece of equipment made for a particular purpose, especially a mechanical or electrical one.",
            "A thin, flat, circular plate or similar object.",
            "Fixtures, equipment, tools and devices used for general-purpose construction and repair of a structure or object. Also such equipment as sold as stock by a store of the same name, e.g. hardware store.",
            "The ability of the brain to record information or impressions with the facility of recalling them later at will.",
            "Encoded computer instructions, usually modifiable (unless stored in some form of unalterable memory such as ROM).",
            "The act of equipping, or the state of being equipped, as for a voyage or expedition.",
            "(etc.) A set of keys used to operate a typewriter, computer etc.",
            "A physical divider intended to block an area from view, or provide shelter from something dangerous.",

            "A sheet material used for writing on or printing on (or as a non-waterproof container), usually made by draining cellulose fibres from a suspension in water.",
            "A paper or cardboard wrapper used to enclose small, flat items, especially letters, for mailing.",
            "A collection of papers collated and archived together.",
            "Someone or something that reports.",
            "A town containing merchants who have exclusive right, under royal authority, to purchase or produce certain goods for export; also, the body of such merchants seen as a group.",
            "An enclosure (enclosed area) used to contain domesticated animals, especially sheep or cattle.",
            "A mechanical or electronic device that performs mathematical calculations.",
            "Flexible material in a roll with a sticky surface on one or both sides; adhesive tape.",
            "A pigment (or dye)-based fluid used for writing, printing etc.",
            "One who makes prints.",

            "An item of clothing (usually worn by a woman or young girl) which both covers the upper part of the body and includes skirts below the waist.",
            "An article of clothing, usually worn by women and girls, that hangs from the waist and covers the lower part of the body.",
            "A female member of a royal family other than a queen, especially a daughter or granddaughter.",
            "Someone or something that jumps, e.g. a participant in a jumping event in track or skiing.",
            "A semi-formal jacket.",
            "A heavy garment worn over other clothes, for protection from cold or weather.",
            "A set of clothes to be worn together, now especially a man's matching jacket and trousers (also business suit or lounge suit), or a similar outfit for a woman.",
            "A pair of trousers made from denim cotton.",
            "A knot; a fastening.",
            "A knitted jacket or jersey, usually of thick wool, worn by athletes before or after exercise.",


        ];
        for ($i = 0; $i < count($kind_id); $i++) {
            DB::table('vocabularies')->insert([
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
