<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'brand' => 'Riceland',
                'description' => '',
                'id' => 1,
                'name' => 'Riceland American Jazmine Rice',
                'price' => '0.000000',
                'upc12' => '035200264013',
                'upc14' => '00035200264013',
            ),
            1 => 
            array (
                'brand' => 'Caress sdfdsafsdfasdf',
                'description' => '',
                'id' => 2,
                'name' => 'Caress Velvet Bliss Ultra Silkening Beauty Bar - 6 Ct',
                'price' => '0.000000',
                'upc12' => '011111065925',
                'upc14' => '00011111065925',
            ),
            2 => 
            array (
                'brand' => 'Earth\'s Best',
                'description' => '',
                'id' => 3,
                'name' => 'Earth\'s Best Organic Fruit Yogurt Smoothie Mixed Berry',
                'price' => '0.000000',
                'upc12' => '023923330139',
                'upc14' => '00023923330139',
            ),
            3 => 
            array (
                'brand' => 'Boar\'s Head',
                'description' => '',
                'id' => 4,
                'name' => 'Boar\'s Head Sliced White American Cheese - 120 Ct',
                'price' => '0.000000',
                'upc12' => '208528800007',
                'upc14' => '00208528800007',
            ),
            4 => 
            array (
                'brand' => 'Back To Nature',
                'description' => '',
                'id' => 5,
                'name' => 'Back To Nature Gluten Free White Cheddar Rice Thin Crackers',
                'price' => '0.000000',
                'upc12' => '759283100036',
                'upc14' => '00759283100036',
            ),
            5 => 
            array (
                'brand' => 'Sally Hansen',
                'description' => '',
                'id' => 6,
                'name' => 'Sally Hansen Nail Color Magnetic 903 Silver Elements',
                'price' => '0.000000',
                'upc12' => '074170388732',
                'upc14' => '00074170388732',
            ),
            6 => 
            array (
                'brand' => 'Twinings Of London',
                'description' => '',
                'id' => 7,
                'name' => 'Twinings Of London Classics Lady Grey Tea - 20 Ct',
                'price' => '0.000000',
                'upc12' => '070177154004',
                'upc14' => '00070177154004',
            ),
            7 => 
            array (
                'brand' => 'Lea & Perrins',
                'description' => '',
                'id' => 8,
                'name' => 'Lea & Perrins Marinade In-a-bag Cracked Peppercorn',
                'price' => '0.000000',
                'upc12' => '051600080015',
                'upc14' => '00051600080015',
            ),
            8 => 
            array (
                'brand' => 'Van De Kamp\'s',
                'description' => '',
                'id' => 9,
                'name' => 'Van De Kamp\'s Fillets Beer Battered - 10 Ct',
                'price' => '0.000000',
                'upc12' => '019600923015',
                'upc14' => '00019600923015',
            ),
            9 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 10,
                'name' => 'Ahold Cocoa Almonds',
                'price' => '0.000000',
                'upc12' => '688267141676',
                'upc14' => '00688267141676',
            ),
            10 => 
            array (
                'brand' => 'Honest Tea',
                'description' => '',
                'id' => 11,
                'name' => 'Honest Tea Peach White Tea',
                'price' => '0.000000',
                'upc12' => '657622604842',
                'upc14' => '00657622604842',
            ),
            11 => 
            array (
                'brand' => 'Mueller',
                'description' => '',
                'id' => 12,
                'name' => 'Mueller Sport Care Basic Support Level Medium Elastic Knee Support',
                'price' => '0.000000',
                'upc12' => '074676640211',
                'upc14' => '00074676640211',
            ),
            12 => 
            array (
                'brand' => 'Garnier Nutritioniste',
                'description' => '',
                'id' => 13,
                'name' => 'Garnier Nutritioniste Moisture Rescue Fresh Cleansing Foam',
                'price' => '0.000000',
                'upc12' => '603084234561',
                'upc14' => '00603084234561',
            ),
            13 => 
            array (
                'brand' => 'Pamprin',
                'description' => '',
                'id' => 14,
                'name' => 'Pamprin Maximum Strength Multi-symptom Menstrual Pain Relief',
                'price' => '0.000000',
                'upc12' => '041167300121',
                'upc14' => '00041167300121',
            ),
            14 => 
            array (
                'brand' => 'Suave',
                'description' => '',
                'id' => 15,
                'name' => 'Suave Naturals Moisturizing Body Wash Creamy Tropical Coconut',
                'price' => '0.000000',
                'upc12' => '079400847201',
                'upc14' => '00079400847201',
            ),
            15 => 
            array (
                'brand' => 'Burt\'s Bees',
                'description' => '',
                'id' => 16,
                'name' => 'Burt\'s Bees Daily Moisturizing Cream Sensitive',
                'price' => '0.000000',
                'upc12' => '792850014008',
                'upc14' => '00792850014008',
            ),
            16 => 
            array (
                'brand' => 'Ducal',
                'description' => '',
                'id' => 17,
                'name' => 'Ducal Refried Red Beans',
                'price' => '0.000000',
                'upc12' => '088313590791',
                'upc14' => '00088313590791',
            ),
            17 => 
            array (
                'brand' => 'Scotch',
                'description' => '',
                'id' => 18,
                'name' => 'Scotch Removable Clear Mounting Squares - 35 Ct',
                'price' => '0.000000',
                'upc12' => '021200725340',
                'upc14' => '00021200725340',
            ),
            18 => 
            array (
                'brand' => 'Careone',
                'description' => '',
                'id' => 19,
                'name' => 'Careone Family Comb Set - 8 Ct',
                'price' => '0.000000',
                'upc12' => '041520035646',
                'upc14' => '00041520035646',
            ),
            19 => 
            array (
                'brand' => 'Usda Produce',
                'description' => '',
                'id' => 20,
                'name' => 'Plums Black',
                'price' => '0.000000',
                'upc12' => '204040000000',
                'upc14' => '00204040000000',
            ),
            20 => 
            array (
                'brand' => 'Doctor\'s Best',
                'description' => '',
                'id' => 21,
                'name' => 'Doctor\'s Best Best Curcumin C3 Complex 1000mg Tablets - 120 Ct',
                'price' => '0.000000',
                'upc12' => '753950001954',
                'upc14' => '00753950001954',
            ),
            21 => 
            array (
                'brand' => 'Betty Crocker',
                'description' => '',
                'id' => 22,
                'name' => 'Betty Crocker Twin Pack Real Potatoes Scalloped 2 Pouches For 2 Meals - 2 Pk',
                'price' => '0.000000',
                'upc12' => '016000288829',
                'upc14' => '00016000288829',
            ),
            22 => 
            array (
                'brand' => 'Reese',
                'description' => '',
                'id' => 23,
                'name' => 'Reese Mandarin Oranges Segments In Light Syrup',
                'price' => '0.000000',
                'upc12' => '070670009658',
                'upc14' => '00070670009658',
            ),
            23 => 
            array (
                'brand' => 'Smart Living',
                'description' => '',
                'id' => 24,
                'name' => 'Smart Living Charcoal Lighter Fluid',
                'price' => '0.000000',
                'upc12' => '688267084225',
                'upc14' => '00688267084225',
            ),
            24 => 
            array (
                'brand' => 'Hood',
                'description' => '',
                'id' => 25,
                'name' => 'Hood Latte Iced Coffee Drink Vanilla Latte',
                'price' => '0.000000',
                'upc12' => '044100117428',
                'upc14' => '00044100117428',
            ),
            25 => 
            array (
                'brand' => 'Triaminic',
                'description' => '',
                'id' => 26,
                'name' => 'Triaminic Syrup Night Time Cold & Cough Grape 4oz',
                'price' => '0.000000',
                'upc12' => '300436344045',
                'upc14' => '00300436344045',
            ),
            26 => 
            array (
                'brand' => 'Morton',
                'description' => '',
                'id' => 27,
                'name' => 'Morton Kosher Salt Coarse',
                'price' => '0.000000',
                'upc12' => '024600017008',
                'upc14' => '00024600017008',
            ),
            27 => 
            array (
                'brand' => 'Usda Produce',
                'description' => '',
                'id' => 28,
                'name' => 'Guava',
                'price' => '0.000000',
                'upc12' => '719175900007',
                'upc14' => '00719175900007',
            ),
            28 => 
            array (
                'brand' => 'Heinz',
                'description' => '',
                'id' => 29,
                'name' => 'Heinz Tomato Ketchup - 2 Ct',
                'price' => '0.000000',
                'upc12' => '013000001038',
                'upc14' => '00013000001038',
            ),
            29 => 
            array (
                'brand' => 'Petmate',
                'description' => '',
                'id' => 30,
                'name' => 'Petmate Booda Bones Steak, Bacon & Chicken Flavors - 9 Ct',
                'price' => '0.000000',
                'upc12' => '723503568678',
                'upc14' => '00723503568678',
            ),
            30 => 
            array (
                'brand' => 'Zhena\'s Gypsy Tea',
                'description' => '',
                'id' => 31,
                'name' => 'Zhena\'s Gypsy Tea Herbal Red Tea Sachets Fire Light Chai - 22 Ct',
                'price' => '0.000000',
                'upc12' => '652790100226',
                'upc14' => '00652790100226',
            ),
            31 => 
            array (
                'brand' => 'Barefoot',
                'description' => '',
                'id' => 32,
                'name' => 'Barefoot Pinot Grigio  187',
                'price' => '0.000000',
                'upc12' => '008500004528',
                'upc14' => '00008500004528',
            ),
            32 => 
            array (
                'brand' => 'The First Years',
                'description' => '',
                'id' => 33,
                'name' => 'Tomy The First Years Gumdrop Orthodontic Pacifiers 6m+ - 2ct',
                'price' => '0.000000',
                'upc12' => '071463060078',
                'upc14' => '00071463060078',
            ),
            33 => 
            array (
                'brand' => 'Halls',
                'description' => '',
                'id' => 34,
                'name' => 'Halls Menthol Cough Suppresant/oral Anesthetic Drops Honey-lemon - 30 Ct',
                'price' => '0.000000',
                'upc12' => '312546628694',
                'upc14' => '00312546628694',
            ),
            34 => 
            array (
                'brand' => 'Nature\'s Way',
                'description' => '',
                'id' => 35,
                'name' => 'Nature\'s Way Forskohlii - 60 Ct',
                'price' => '0.000000',
                'upc12' => '033674100066',
                'upc14' => '00033674100066',
            ),
            35 => 
            array (
                'brand' => 'Deerfields Gluten Free',
                'description' => '',
                'id' => 36,
                'name' => 'Rice Bran Gluten Free Dinner Rolls Plain',
                'price' => '0.000000',
                'upc12' => '610358991525',
                'upc14' => '00610358991525',
            ),
            36 => 
            array (
                'brand' => 'Nakano',
                'description' => '',
                'id' => 37,
                'name' => 'Nakano Seasoned Rice Vinegar Original',
                'price' => '0.000000',
                'upc12' => '073575295003',
                'upc14' => '00073575295003',
            ),
            37 => 
            array (
                'brand' => 'Sundown Naturals',
                'description' => '',
                'id' => 38,
                'name' => 'Sundown Naturals Essential Electrolytes Tropical Punch, Watermelon And Fruit Punch Gummies - 60 Ct',
                'price' => '0.000000',
                'upc12' => '030768540548',
                'upc14' => '00030768540548',
            ),
            38 => 
            array (
                'brand' => 'Munchies',
                'description' => '',
                'id' => 39,
                'name' => 'Munchies Sandwich Crackers Cheddar Cheese On Golden Toast Crackers - 8 Pk',
                'price' => '0.000000',
                'upc12' => '028400029254',
                'upc14' => '00028400029254',
            ),
            39 => 
            array (
                'brand' => 'Amy\'s',
                'description' => '',
                'id' => 40,
                'name' => 'Amy\'s Light & Lean Spaghetti Italiano',
                'price' => '0.000000',
                'upc12' => '042272008063',
                'upc14' => '00042272008063',
            ),
            40 => 
            array (
                'brand' => 'P.f. Chang\'s',
                'description' => '',
                'id' => 41,
                'name' => 'P.f. Chang\'s Home Menu Meal For Two Beef With Broccoli',
                'price' => '0.000000',
                'upc12' => '031000670016',
                'upc14' => '00031000670016',
            ),
            41 => 
            array (
                'brand' => 'Mom\'s Best Naturals',
                'description' => '',
                'id' => 42,
                'name' => 'Mom\'s Best Naturals Cereal Toasted Cinnamon Squares',
                'price' => '0.000000',
                'upc12' => '883978129115',
                'upc14' => '00883978129115',
            ),
            42 => 
            array (
                'brand' => 'Ferrara',
                'description' => '',
                'id' => 43,
                'name' => 'Ferrara Vanilla Syrup',
                'price' => '0.000000',
                'upc12' => '071403000379',
                'upc14' => '00071403000379',
            ),
            43 => 
            array (
                'brand' => 'Elmer\'s',
                'description' => '',
                'id' => 44,
                'name' => 'Elmer\'s Board Mate Dual Tip Glue Pen',
                'price' => '0.000000',
                'upc12' => '026000001403',
                'upc14' => '00026000001403',
            ),
            44 => 
            array (
                'brand' => 'Kellogg\'s',
                'description' => '',
                'id' => 45,
                'name' => 'Kellogg\'s Disney Pixar Cars 2 Cereal',
                'price' => '0.000000',
                'upc12' => '038000542237',
                'upc14' => '00038000542237',
            ),
            45 => 
            array (
                'brand' => 'Mama Marys',
                'description' => '',
                'id' => 46,
                'name' => 'Pizza Sauce',
                'price' => '0.000000',
                'upc12' => '035457770664',
                'upc14' => '00035457770664',
            ),
            46 => 
            array (
                'brand' => 'Bear Naked',
                'description' => '',
                'id' => 47,
                'name' => 'Bear Naked Fit Almond Crisp 100% Natural Energy Cereal',
                'price' => '0.000000',
                'upc12' => '884623708976',
                'upc14' => '00884623708976',
            ),
            47 => 
            array (
                'brand' => 'Dove',
                'description' => '',
                'id' => 48,
                'name' => 'Dove Men + Care Antiperspirant Deodorant Cool Silver',
                'price' => '0.000000',
                'upc12' => '079400271631',
                'upc14' => '00079400271631',
            ),
            48 => 
            array (
                'brand' => 'Easy-off',
                'description' => '',
                'id' => 49,
                'name' => 'Easy-off Oven Cleaner Lemon Scent',
                'price' => '0.000000',
                'upc12' => '062338879772',
                'upc14' => '00062338879772',
            ),
            49 => 
            array (
                'brand' => 'Choice',
                'description' => '',
                'id' => 50,
                'name' => 'Choice Organic Teas Black Tea Classic Black - 16 Ct',
                'price' => '0.000000',
                'upc12' => '047445919221',
                'upc14' => '00047445919221',
            ),
            50 => 
            array (
                'brand' => 'Careone',
                'description' => '',
                'id' => 51,
                'name' => 'Careone Lubricating Jelly',
                'price' => '0.000000',
                'upc12' => '041520314307',
                'upc14' => '00041520314307',
            ),
            51 => 
            array (
                'brand' => 'Sacla',
                'description' => '',
                'id' => 52,
                'name' => 'Sacla Italia Sun Dried Pesto Sauce',
                'price' => '0.000000',
                'upc12' => '015229375198',
                'upc14' => '00015229375198',
            ),
            52 => 
            array (
                'brand' => 'Huggies',
                'description' => '',
                'id' => 53,
                'name' => 'Huggies Natural Care Wipes - 3 Pk',
                'price' => '0.000000',
                'upc12' => '036000141870',
                'upc14' => '00036000141870',
            ),
            53 => 
            array (
                'brand' => 'Serpis',
                'description' => '',
                'id' => 54,
                'name' => 'Serpis Green Olives Stuffed With Spicy Chorizo',
                'price' => '0.000000',
                'upc12' => '789293900173',
                'upc14' => '00789293900173',
            ),
            54 => 
            array (
                'brand' => 'Ripken',
                'description' => '',
                'id' => 55,
                'name' => 'Ripken Power Shred Beef Jerky Teriyaki',
                'price' => '0.000000',
                'upc12' => '817544011047',
                'upc14' => '00817544011047',
            ),
            55 => 
            array (
                'brand' => 'Arnold',
                'description' => '',
                'id' => 56,
                'name' => 'Arnold Bread Jewish Rye Everything',
                'price' => '0.000000',
                'upc12' => '073410032022',
                'upc14' => '00073410032022',
            ),
            56 => 
            array (
                'brand' => 'Traditional Medicinals',
                'description' => '',
                'id' => 57,
                'name' => 'Traditional Medicinals Herbal Tea Bags Just For Kids Organic Nighty Night - 18 Ct',
                'price' => '0.000000',
                'upc12' => '032917001863',
                'upc14' => '00032917001863',
            ),
            57 => 
            array (
                'brand' => 'Perry\'s Ice Cream',
                'description' => '',
                'id' => 58,
                'name' => 'Perry\'s Ice Cream Panda Paws',
                'price' => '0.000000',
                'upc12' => '075767200246',
                'upc14' => '00075767200246',
            ),
            58 => 
            array (
                'brand' => 'Black Swan',
                'description' => '',
                'id' => 59,
                'name' => 'Black Swan Shiraz Merlot 1.5',
                'price' => '0.000000',
                'upc12' => '008500001210',
                'upc14' => '00008500001210',
            ),
            59 => 
            array (
                'brand' => 'Maty\'s',
                'description' => '',
                'id' => 60,
                'name' => 'Maty\'s All Natural Kids 1+ Caramel Banana Taste Cough Syrup',
                'price' => '0.000000',
                'upc12' => '899874002018',
                'upc14' => '00899874002018',
            ),
            60 => 
            array (
                'brand' => 'Kraft',
                'description' => '',
                'id' => 61,
                'name' => 'Kraft Anything Dressing Honey Mustard',
                'price' => '0.000000',
                'upc12' => '021000028207',
                'upc14' => '00021000028207',
            ),
            61 => 
            array (
                'brand' => 'Eight O\'clock Coffee',
                'description' => '',
                'id' => 62,
                'name' => 'Eight O\'clock Coffee Dark Italian Roast Ground',
                'price' => '0.000000',
                'upc12' => '011141100054',
                'upc14' => '00011141100054',
            ),
            62 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 63,
                'name' => 'Ahold  Honey Mustard',
                'price' => '0.000000',
                'upc12' => '688267038693',
                'upc14' => '00688267038693',
            ),
            63 => 
            array (
                'brand' => 'Enzymatic Therapy',
                'description' => '',
                'id' => 64,
                'name' => 'Enzymatic Therapy  Acidophilus Pearls Active Cultures Dietary Supplement - 30 Ct',
                'price' => '0.000000',
                'upc12' => '763948042937',
                'upc14' => '00763948042937',
            ),
            64 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 65,
                'name' => 'Ahold Complete Buttermilk Pancake & Waffle Mix',
                'price' => '0.000000',
                'upc12' => '688267078491',
                'upc14' => '00688267078491',
            ),
            65 => 
            array (
                'brand' => 'Mrs Renfro',
                'description' => '',
                'id' => 66,
                'name' => 'Salsa Habanero',
                'price' => '0.000000',
                'upc12' => '041235000700',
                'upc14' => '00041235000700',
            ),
            66 => 
            array (
                'brand' => 'Say-it',
                'description' => '',
                'id' => 67,
                'name' => 'Say-it Sandwich & Snack Bags- 60 Pk',
                'price' => '0.000000',
                'upc12' => '804879349471',
                'upc14' => '00804879349471',
            ),
            67 => 
            array (
                'brand' => 'Hillshire Farm',
                'description' => '',
                'id' => 68,
                'name' => 'Hillshire Farm Deli Select Smoked Ham With Water Added Ultra Thin',
                'price' => '0.000000',
                'upc12' => '044500976496',
                'upc14' => '00044500976496',
            ),
            68 => 
            array (
                'brand' => 'Coffee-mate',
                'description' => '',
                'id' => 69,
                'name' => 'Nestle Coffee-mate Fat Free Hazelnut Flavor Coffee Creamer',
                'price' => '0.000000',
                'upc12' => '050000127344',
                'upc14' => '00050000127344',
            ),
            69 => 
            array (
                'brand' => 'Careone',
                'description' => '',
                'id' => 70,
                'name' => 'Careone Cotton Swabs',
                'price' => '0.000000',
                'upc12' => '041520313539',
                'upc14' => '00041520313539',
            ),
            70 => 
            array (
                'brand' => '1-day',
                'description' => '',
                'id' => 71,
                'name' => '1-day Vaginal Antifungal Prefilled Applicator 1-dose Treatment',
                'price' => '0.000000',
                'upc12' => '380045410010',
                'upc14' => '00380045410010',
            ),
            71 => 
            array (
                'brand' => 'Preparation H',
                'description' => '',
                'id' => 72,
                'name' => 'Preparation H Hemorrhoidal Ointment',
                'price' => '0.000000',
                'upc12' => '305732871103',
                'upc14' => '00305732871103',
            ),
            72 => 
            array (
                'brand' => 'Roth Kase',
                'description' => '',
                'id' => 73,
                'name' => 'Roth Kase Mini Cheeseboard Kit Havarti, Gruyere & Pepper Jack - 3 Ct',
                'price' => '0.000000',
                'upc12' => '736547211561',
                'upc14' => '00736547211561',
            ),
            73 => 
            array (
                'brand' => 'Firm Grip',
                'description' => '',
                'id' => 74,
                'name' => 'Firm Grip Disposable Nitrile Gloves - 10 Gloves',
                'price' => '0.000000',
                'upc12' => '731919138200',
                'upc14' => '00731919138200',
            ),
            74 => 
            array (
                'brand' => 'Downy',
                'description' => '',
                'id' => 75,
                'name' => 'Downy Ultra Infusions Orchid Allure Fabric Softener - 48 Loads',
                'price' => '0.000000',
                'upc12' => '037000835080',
                'upc14' => '00037000835080',
            ),
            75 => 
            array (
                'brand' => 'Hostess',
                'description' => '',
                'id' => 76,
                'name' => 'Hostess Mini Muffins Chocolate Chip - 20 Ct',
                'price' => '0.000000',
                'upc12' => '888109110154',
                'upc14' => '00888109110154',
            ),
            76 => 
            array (
                'brand' => 'Gerber',
                'description' => '',
                'id' => 77,
                'name' => 'Gerber Graduates For Toddlers Lil\' Meals Pasta Shells & Cheese',
                'price' => '0.000000',
                'upc12' => '015000005771',
                'upc14' => '00015000005771',
            ),
            77 => 
            array (
                'brand' => 'Powerbar',
                'description' => '',
                'id' => 78,
                'name' => 'Powerbar Protein Plus High Protein Bar Vanilla Yogurt',
                'price' => '0.000000',
                'upc12' => '097421490015',
                'upc14' => '00097421490015',
            ),
            78 => 
            array (
                'brand' => 'Every Man Jack',
                'description' => '',
                'id' => 79,
                'name' => 'Every Man Jack Shave Cream',
                'price' => '0.000000',
                'upc12' => '878639000476',
                'upc14' => '00878639000476',
            ),
            79 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 80,
                'name' => 'Ahold Premium Paper Towels Giant Rolls - 8 Ct',
                'price' => '0.000000',
                'upc12' => '688267130434',
                'upc14' => '00688267130434',
            ),
            80 => 
            array (
                'brand' => 'Piacci',
                'description' => '',
                'id' => 81,
                'name' => 'Piacci Parmesan Nuggets',
                'price' => '0.000000',
                'upc12' => '637876989551',
                'upc14' => '00637876989551',
            ),
            81 => 
            array (
                'brand' => 'Organix',
                'description' => '',
                'id' => 82,
                'name' => 'Organix Smoothing Shea Butter Conditioner',
                'price' => '0.000000',
                'upc12' => '022796910028',
                'upc14' => '00022796910028',
            ),
            82 => 
            array (
                'brand' => 'Dr Scholl\'s',
                'description' => '',
                'id' => 83,
                'name' => 'Dr. Scholl\'s For Her Rub Relief Strips',
                'price' => '0.000000',
                'upc12' => '011017405269',
                'upc14' => '00011017405269',
            ),
            83 => 
            array (
                'brand' => 'Guida\'s',
                'description' => '',
                'id' => 84,
                'name' => 'Guida\'s Whole Milk',
                'price' => '0.000000',
                'upc12' => '022451017505',
                'upc14' => '00022451017505',
            ),
            84 => 
            array (
                'brand' => 'Hime',
                'description' => '',
                'id' => 85,
                'name' => 'Hime Wasabi Powdered Sushi',
                'price' => '0.000000',
                'upc12' => '011152817606',
                'upc14' => '00011152817606',
            ),
            85 => 
            array (
                'brand' => 'Usda Meat',
                'description' => '',
                'id' => 86,
                'name' => 'Boneless Pork Shoulder Roast',
                'price' => '0.000000',
                'upc12' => '216076400006',
                'upc14' => '00216076400006',
            ),
            86 => 
            array (
                'brand' => 'Usda Meat',
                'description' => '',
                'id' => 87,
                'name' => 'Boneless Pork Shoulder Roast',
                'price' => '0.000000',
                'upc12' => '020822530000',
                'upc14' => '00020822530000',
            ),
            87 => 
            array (
                'brand' => 'Simply Enjoy',
                'description' => '',
                'id' => 88,
                'name' => 'Ahold Simply Enjoy Gourmet Spread Smoky Fig & Roasted Garlic',
                'price' => '0.000000',
                'upc12' => '688267136474',
                'upc14' => '00688267136474',
            ),
            88 => 
            array (
                'brand' => 'Cuisinart',
                'description' => '',
                'id' => 89,
                'name' => 'Cuisinart Citrus Juicer Pulp Control',
                'price' => '0.000000',
                'upc12' => '086279036858',
                'upc14' => '00086279036858',
            ),
            89 => 
            array (
                'brand' => 'Velveeta',
                'description' => '',
                'id' => 90,
                'name' => 'Velveeta Cheese',
                'price' => '0.000000',
                'upc12' => '021000611614',
                'upc14' => '00021000611614',
            ),
            90 => 
            array (
                'brand' => 'Lotrimin',
                'description' => '',
                'id' => 91,
                'name' => 'Lotrimin Ultra Antifungal Athlete\'s Foot Cream',
                'price' => '0.000000',
                'upc12' => '311017235256',
                'upc14' => '00311017235256',
            ),
            91 => 
            array (
                'brand' => 'Pasta Lensi',
                'description' => '',
                'id' => 92,
                'name' => 'Pasta Lensi Gigli #253',
                'price' => '0.000000',
                'upc12' => '047325077355',
                'upc14' => '00047325077355',
            ),
            92 => 
            array (
                'brand' => 'Cherrybrook Kitchen',
                'description' => '',
                'id' => 93,
                'name' => 'Cherrybrook Kitchen D.w. Sugar Cookie Mix',
                'price' => '0.000000',
                'upc12' => '182308000040',
                'upc14' => '00182308000040',
            ),
            93 => 
            array (
                'brand' => 'Herb Pharm',
                'description' => '',
                'id' => 94,
                'name' => 'Herb Pharm Black Elderberry Herbal Glycerite Extract',
                'price' => '0.000000',
                'upc12' => '090800000751',
                'upc14' => '00090800000751',
            ),
            94 => 
            array (
                'brand' => 'Gold Bond',
                'description' => '',
                'id' => 95,
                'name' => 'Gold Bond Medicated Cornstarch Plus Baby Powder',
                'price' => '0.000000',
                'upc12' => '041167023044',
                'upc14' => '00041167023044',
            ),
            95 => 
            array (
                'brand' => 'Chex Mix',
                'description' => '',
                'id' => 96,
                'name' => 'General Mills Sweet \'n Salty Honey Nut Chex Mix',
                'price' => '0.000000',
                'upc12' => '016000164901',
                'upc14' => '00016000164901',
            ),
            96 => 
            array (
                'brand' => 'Udi\'s',
                'description' => '',
                'id' => 97,
                'name' => 'Udi\'s Soft N\' Chewy Granola Bars Chocolate Chip - 5 Ct',
                'price' => '0.000000',
                'upc12' => '698997807308',
                'upc14' => '00698997807308',
            ),
            97 => 
            array (
                'brand' => 'Usda Meat',
                'description' => '',
                'id' => 98,
                'name' => 'Smoked Pork Hocks - 4 Ct',
                'price' => '0.000000',
                'upc12' => '162308001773',
                'upc14' => '00162308001773',
            ),
            98 => 
            array (
                'brand' => 'Kelapo',
                'description' => '',
                'id' => 99,
                'name' => 'Kelapo Extra Virgin Coconut Oil Baking Sticks',
                'price' => '0.000000',
                'upc12' => '857320002081',
                'upc14' => '00857320002081',
            ),
            99 => 
            array (
                'brand' => 'Margaret Holmes',
                'description' => '',
                'id' => 100,
                'name' => 'Margaret Holmes Peanut Patch Green Boiled Peanuts Hot & Spicy',
                'price' => '0.000000',
                'upc12' => '041443902643',
                'upc14' => '00041443902643',
            ),
            100 => 
            array (
                'brand' => 'Kraft',
                'description' => '',
                'id' => 101,
                'name' => 'Kraft Velveeta Shells & Cheese 2% Milk',
                'price' => '0.000000',
                'upc12' => '021000023233',
                'upc14' => '00021000023233',
            ),
            101 => 
            array (
                'brand' => 'Sylvania',
                'description' => '',
                'id' => 102,
                'name' => 'Sylvania Daylight 75 Watt Indoor Light Bulb',
                'price' => '0.000000',
                'upc12' => '046135116742',
                'upc14' => '00046135116742',
            ),
            102 => 
            array (
                'brand' => 'Sushi Chef',
                'description' => '',
                'id' => 103,
                'name' => 'Sushi Chef Wakame Soup Mix Traditional Japanese Style',
                'price' => '0.000000',
                'upc12' => '047834063047',
                'upc14' => '00047834063047',
            ),
            103 => 
            array (
                'brand' => 'Campbell\'s',
                'description' => '',
                'id' => 104,
                'name' => 'Campbell\'s Homestyle Soup Italian-style Wedding',
                'price' => '0.000000',
                'upc12' => '051000143709',
                'upc14' => '00051000143709',
            ),
            104 => 
            array (
                'brand' => 'Sapore Sensuale',
                'description' => '',
                'id' => 105,
                'name' => 'Sapore Sensuale Cake Toasted Almond',
                'price' => '0.000000',
                'upc12' => '025537999054',
                'upc14' => '00025537999054',
            ),
            105 => 
            array (
                'brand' => 'Goody',
                'description' => '',
                'id' => 106,
                'name' => 'Goody Ouchless No Metal Elastics - 29 Ct',
                'price' => '0.000000',
                'upc12' => '041457272565',
                'upc14' => '00041457272565',
            ),
            106 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 107,
                'name' => 'Ahold Cooked Shrimp Large Tail-on',
                'price' => '0.000000',
                'upc12' => '688267123580',
                'upc14' => '00688267123580',
            ),
            107 => 
            array (
                'brand' => 'Smart Living',
                'description' => '',
                'id' => 108,
                'name' => 'Smart Living 10.5" X 8" 3 Subject Notebook College Ruled',
                'price' => '0.000000',
                'upc12' => '041520893307',
                'upc14' => '00041520893307',
            ),
            108 => 
            array (
                'brand' => 'Playtex',
                'description' => '',
                'id' => 109,
                'name' => 'Playtex Plastic Tampons Gentle Glide 360 Multi-pack Regular/super Fresh Scent - 18 Ct',
                'price' => '0.000000',
                'upc12' => '078300098362',
                'upc14' => '00078300098362',
            ),
            109 => 
            array (
                'brand' => 'Hershey\'s',
                'description' => '',
                'id' => 110,
                'name' => 'Hershey\'s Caramel Syrup',
                'price' => '0.000000',
                'upc12' => '034000003662',
                'upc14' => '00034000003662',
            ),
            110 => 
            array (
                'brand' => 'Windex',
                'description' => '',
                'id' => 111,
                'name' => 'Windex Original Glass & Surface Wipes - 28 Pk',
                'price' => '0.000000',
                'upc12' => '019800702328',
                'upc14' => '00019800702328',
            ),
            111 => 
            array (
                'brand' => 'Olay Total Effects',
                'description' => '',
                'id' => 112,
                'name' => 'Olay Total Effects 7-in-1 Tone Correcting Eye Treatment 0.5 Fl Oz',
                'price' => '0.000000',
                'upc12' => '075609190360',
                'upc14' => '00075609190360',
            ),
            112 => 
            array (
                'brand' => 'Alberto Vo5',
                'description' => '',
                'id' => 113,
                'name' => 'Alberto Vo5 Normal Balancing Shampoo',
                'price' => '0.000000',
                'upc12' => '816559011080',
                'upc14' => '00816559011080',
            ),
            113 => 
            array (
                'brand' => 'Milani',
                'description' => '',
                'id' => 114,
                'name' => 'Milani Total Lash Cover Mascara 105 Black',
                'price' => '0.000000',
                'upc12' => '717489901055',
                'upc14' => '00717489901055',
            ),
            114 => 
            array (
                'brand' => 'Sylvia\'s Restaurant',
                'description' => '',
                'id' => 115,
                'name' => 'Sylvia\'s Restaurant Specially-seasoned Field Peas With Snaps',
                'price' => '0.000000',
                'upc12' => '608623000331',
                'upc14' => '00608623000331',
            ),
            115 => 
            array (
                'brand' => 'Wheat Thins',
                'description' => '',
                'id' => 116,
                'name' => 'Nabisco Wheat Thins Snacks',
                'price' => '0.000000',
                'upc12' => '044000030384',
                'upc14' => '00044000030384',
            ),
            116 => 
            array (
                'brand' => 'Careone',
                'description' => '',
                'id' => 117,
                'name' => 'Careone Whitening Toothbrush Soft',
                'price' => '0.000000',
                'upc12' => '041520019677',
                'upc14' => '00041520019677',
            ),
            117 => 
            array (
                'brand' => 'Vaseline',
                'description' => '',
                'id' => 118,
                'name' => 'Vaseline Spray & Go Moisturizer Total Moisture',
                'price' => '0.000000',
                'upc12' => '305210269583',
                'upc14' => '00305210269583',
            ),
            118 => 
            array (
                'brand' => 'Nature Made',
                'description' => '',
                'id' => 119,
                'name' => 'Nature Made Fish Oil 1200mg Omega-3 360mg Liquid Softgels Lemon Flavor - 60 Ct',
                'price' => '0.000000',
                'upc12' => '031604027551',
                'upc14' => '00031604027551',
            ),
            119 => 
            array (
                'brand' => 'Bellucci',
                'description' => '',
                'id' => 120,
                'name' => 'Belluci Extra Virgin Olive Oil 100% Italian',
                'price' => '0.000000',
                'upc12' => '853553002133',
                'upc14' => '00853553002133',
            ),
            120 => 
            array (
                'brand' => 'Ruffles',
                'description' => '',
                'id' => 121,
                'name' => 'Ruffles Sour Cream & Onion Potato Chips',
                'price' => '0.000000',
                'upc12' => '028400033329',
                'upc14' => '00028400033329',
            ),
            121 => 
            array (
                'brand' => 'Turkey Hill',
                'description' => '',
                'id' => 122,
                'name' => 'Turkey Hill Premium Ice Cream Party Cake',
                'price' => '0.000000',
                'upc12' => '020735420966',
                'upc14' => '00020735420966',
            ),
            122 => 
            array (
                'brand' => 'Tums',
                'description' => '',
                'id' => 123,
                'name' => 'Tums Freshers Antacid Spearmint - 2 Pk',
                'price' => '0.000000',
                'upc12' => '307667630039',
                'upc14' => '00307667630039',
            ),
            123 => 
            array (
                'brand' => 'Manischewitz',
                'description' => '',
                'id' => 124,
                'name' => 'Manishchewitz Gluten Free Wide Egg Noodles',
                'price' => '0.000000',
                'upc12' => '072700104272',
                'upc14' => '00072700104272',
            ),
            124 => 
            array (
                'brand' => 'Gillette Fusion',
                'description' => '',
                'id' => 125,
                'name' => 'Gillette Fusion Proglide Cartridges - 8 Ct',
                'price' => '0.000000',
                'upc12' => '047400302877',
                'upc14' => '00047400302877',
            ),
            125 => 
            array (
                'brand' => 'Bakery',
                'description' => '',
                'id' => 126,
                'name' => 'Bakery Pistachio Muffin - 4 Ct',
                'price' => '0.000000',
                'upc12' => '296680000007',
                'upc14' => '00296680000007',
            ),
            126 => 
            array (
                'brand' => 'Frigo',
                'description' => '',
                'id' => 127,
                'name' => 'Frigo Cheese Heads 100% Natural String Cheese Light - 12 Ct',
                'price' => '0.000000',
                'upc12' => '041716842942',
                'upc14' => '00041716842942',
            ),
            127 => 
            array (
                'brand' => 'Similac Advance',
                'description' => '',
                'id' => 128,
                'name' => 'Similac Advance Infant Formula With Iron Milk-based/ready To Feed - 6 Ct',
                'price' => '0.000000',
                'upc12' => '070074586137',
                'upc14' => '00070074586137',
            ),
            128 => 
            array (
                'brand' => 'Rice-a-roni',
                'description' => '',
                'id' => 129,
                'name' => 'Rice A Roni Chicken Flavor Lower Sodium Rice',
                'price' => '0.000000',
                'upc12' => '015300430617',
                'upc14' => '00015300430617',
            ),
            129 => 
            array (
                'brand' => 'Oberweis',
                'description' => '',
                'id' => 130,
                'name' => 'Oberweis Dairy Raspberry Lemonade',
                'price' => '0.000000',
                'upc12' => '616029012407',
                'upc14' => '00616029012407',
            ),
            130 => 
            array (
                'brand' => 'Companion',
                'description' => '',
                'id' => 131,
                'name' => 'Companion Dog Biscuits Senior',
                'price' => '0.000000',
                'upc12' => '688267139680',
                'upc14' => '00688267139680',
            ),
            131 => 
            array (
                'brand' => 'Coco',
                'description' => '',
                'id' => 132,
                'name' => 'Coco Lite Multigrain Pop Cakes Whole Wheat',
                'price' => '0.000000',
                'upc12' => '641748624792',
                'upc14' => '00641748624792',
            ),
            132 => 
            array (
                'brand' => 'Coffee-mate',
                'description' => '',
                'id' => 133,
                'name' => 'Nestle The Original Coffee Mate',
                'price' => '0.000000',
                'upc12' => '050000301522',
                'upc14' => '00050000301522',
            ),
            133 => 
            array (
                'brand' => 'Sweet Leaf',
                'description' => '',
                'id' => 134,
                'name' => 'Sweetleaf Natural Stevia Sweetener Packets - 70 Ct',
                'price' => '0.000000',
                'upc12' => '716123124638',
                'upc14' => '00716123124638',
            ),
            134 => 
            array (
                'brand' => 'Pamela\'s',
                'description' => '',
                'id' => 135,
                'name' => 'Pamela\'s Chocolate Cake Mix',
                'price' => '0.000000',
                'upc12' => '093709300403',
                'upc14' => '00093709300403',
            ),
            135 => 
            array (
                'brand' => 'Designer Greetings',
                'description' => '',
                'id' => 136,
                'name' => 'Designer Gift Bag Glitterwrap',
                'price' => '0.000000',
                'upc12' => '098016322834',
                'upc14' => '00098016322834',
            ),
            136 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 137,
                'name' => 'Ahold 5 Cheese Pizza Ready To Bake',
                'price' => '0.000000',
                'upc12' => '688267136252',
                'upc14' => '00688267136252',
            ),
            137 => 
            array (
                'brand' => 'Deerfields Gluten Free',
                'description' => '',
                'id' => 138,
                'name' => 'Rice Bran Gluten Free Mini Baguette',
                'price' => '0.000000',
                'upc12' => '610358991822',
                'upc14' => '00610358991822',
            ),
            138 => 
            array (
                'brand' => 'Cracker Jack',
                'description' => '',
                'id' => 139,
                'name' => 'Cracker Jack Popcorn Butter Toffee',
                'price' => '0.000000',
                'upc12' => '028400162234',
                'upc14' => '00028400162234',
            ),
            139 => 
            array (
                'brand' => 'Swingline',
                'description' => '',
                'id' => 140,
                'name' => 'Swingline Standard Desk Stapler Bonus Pack!',
                'price' => '0.000000',
                'upc12' => '074711545679',
                'upc14' => '00074711545679',
            ),
            140 => 
            array (
                'brand' => 'Usda Meat',
                'description' => '',
                'id' => 141,
                'name' => 'Pork Chops Bone-in Center Cut',
                'price' => '0.000000',
                'upc12' => '208220500007',
                'upc14' => '00208220500007',
            ),
            141 => 
            array (
                'brand' => 'Usda Meat',
                'description' => '',
                'id' => 142,
                'name' => 'Pork Chops Bone-in Center Cut',
                'price' => '0.000000',
                'upc12' => '028881400000',
                'upc14' => '00028881400000',
            ),
            142 => 
            array (
                'brand' => 'Snack Pack',
                'description' => '',
                'id' => 143,
                'name' => 'Snack Pack Tapioca Pudding - 4 Pk',
                'price' => '0.000000',
                'upc12' => '027000419021',
                'upc14' => '00027000419021',
            ),
            143 => 
            array (
                'brand' => 'Pure Power',
                'description' => '',
                'id' => 144,
                'name' => 'Pure Power Easy Grip Scrub Brush',
                'price' => '0.000000',
                'upc12' => '041520880710',
                'upc14' => '00041520880710',
            ),
            144 => 
            array (
                'brand' => 'Cocktail',
                'description' => '',
                'id' => 145,
                'name' => 'Cocktail Rx Frozen Cocktails Blue Hawaiian',
                'price' => '0.000000',
                'upc12' => '744160220198',
                'upc14' => '00744160220198',
            ),
            145 => 
            array (
                'brand' => 'Anagram',
                'description' => '',
                'id' => 146,
                'name' => 'Anagram Foil Balloon 18" Happy Birthday Smiles',
                'price' => '0.000000',
                'upc12' => '048419063957',
                'upc14' => '00048419063957',
            ),
            146 => 
            array (
                'brand' => 'Shelton\'s',
                'description' => '',
                'id' => 147,
                'name' => 'Shelton\'s Turkey Burgers - 3 Ct',
                'price' => '0.000000',
                'upc12' => '048481009952',
                'upc14' => '00048481009952',
            ),
            147 => 
            array (
                'brand' => 'Buckler',
                'description' => '',
                'id' => 148,
                'name' => 'Buckler Non-alcoholic Malt Beverage - 6 Ct',
                'price' => '0.000000',
                'upc12' => '072890000309',
                'upc14' => '00072890000309',
            ),
            148 => 
            array (
                'brand' => 'Cento',
                'description' => '',
                'id' => 149,
                'name' => 'Cento All Purpose Crushed Tomatoes',
                'price' => '0.000000',
                'upc12' => '070796300035',
                'upc14' => '00070796300035',
            ),
            149 => 
            array (
                'brand' => 'Careone',
                'description' => '',
                'id' => 150,
                'name' => 'Careone Vitamin B12 500mcg Tablets - 100 Ct',
                'price' => '0.000000',
                'upc12' => '041520874061',
                'upc14' => '00041520874061',
            ),
            150 => 
            array (
                'brand' => 'Earth Balance',
                'description' => '',
                'id' => 151,
                'name' => 'Earth Balance Natural Peanut Butter And Flaxseed Creamy',
                'price' => '0.000000',
                'upc12' => '033776100803',
                'upc14' => '00033776100803',
            ),
            151 => 
            array (
                'brand' => 'Looza',
                'description' => '',
                'id' => 152,
                'name' => 'Looza Mango Juice Drink',
                'price' => '0.000000',
                'upc12' => '045587547104',
                'upc14' => '00045587547104',
            ),
            152 => 
            array (
                'brand' => 'Campbell\'s Go',
                'description' => '',
                'id' => 153,
                'name' => 'Campbell\'s Go Soup Coconut Curry With Chicken & Shitake Mushrooms',
                'price' => '0.000000',
                'upc12' => '051000199447',
                'upc14' => '00051000199447',
            ),
            153 => 
            array (
                'brand' => 'Sweet Baby Ray\'s',
                'description' => '',
                'id' => 154,
                'name' => 'Sweet Baby Ray\'s Barbecue Sauce',
                'price' => '0.000000',
                'upc12' => '013409352311',
                'upc14' => '00013409352311',
            ),
            154 => 
            array (
                'brand' => 'Renuzit',
                'description' => '',
                'id' => 155,
                'name' => 'Renuzit Gel Air Freshener Original',
                'price' => '0.000000',
                'upc12' => '019800036591',
                'upc14' => '00019800036591',
            ),
            155 => 
            array (
                'brand' => 'Uncle Ben\'s',
                'description' => '',
                'id' => 156,
                'name' => 'Uncle Ben\'s Roasted Garlic Ready Whole Grain Rice Medley',
                'price' => '0.000000',
                'upc12' => '054800344475',
                'upc14' => '00054800344475',
            ),
            156 => 
            array (
                'brand' => 'Howe',
                'description' => '',
                'id' => 157,
                'name' => 'Howe Gummi Sour Brites',
                'price' => '0.000000',
                'upc12' => '073171006232',
                'upc14' => '00073171006232',
            ),
            157 => 
            array (
                'brand' => 'Ritz Bits',
                'description' => '',
                'id' => 158,
                'name' => 'Nabisco Ritz Bits Cheese Cracker Sandwiches',
                'price' => '0.000000',
                'upc12' => '044000004149',
                'upc14' => '00044000004149',
            ),
            158 => 
            array (
                'brand' => 'Alessi',
                'description' => '',
                'id' => 159,
                'name' => 'Alessi Balsamic Reduction Traditional Balsamic',
                'price' => '0.000000',
                'upc12' => '071072021804',
                'upc14' => '00071072021804',
            ),
            159 => 
            array (
                'brand' => 'Allegra',
                'description' => '',
                'id' => 160,
                'name' => 'Allegra Allergy 12 Hour Relief Tablets - 12 Ct',
                'price' => '0.000000',
                'upc12' => '041167413128',
                'upc14' => '00041167413128',
            ),
            160 => 
            array (
                'brand' => 'Reynolds',
                'description' => '',
                'id' => 161,
                'name' => 'Reynolds Staybrite Baking Cups Flowers - 36 Ct',
                'price' => '0.000000',
                'upc12' => '010900633376',
                'upc14' => '00010900633376',
            ),
            161 => 
            array (
                'brand' => 'Mccormick',
                'description' => '',
                'id' => 162,
                'name' => 'Mccormick Grill Mates Brown Sugar Bourbon Marinade',
                'price' => '0.000000',
                'upc12' => '052100013848',
                'upc14' => '00052100013848',
            ),
            162 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 163,
                'name' => 'Ahold Cocoa Magic Cereal',
                'price' => '0.000000',
                'upc12' => '688267132667',
                'upc14' => '00688267132667',
            ),
            163 => 
            array (
                'brand' => 'Cocktail',
                'description' => '',
                'id' => 164,
                'name' => 'Cocktail Rx Frozen Cocktail Cosmopolitan',
                'price' => '0.000000',
                'upc12' => '744160220051',
                'upc14' => '00744160220051',
            ),
            164 => 
            array (
                'brand' => 'Earth Balance',
                'description' => '',
                'id' => 165,
                'name' => 'Earth Balance Natural Buttery Spread Soy Free',
                'price' => '0.000000',
                'upc12' => '033776011895',
                'upc14' => '00033776011895',
            ),
            165 => 
            array (
                'brand' => 'T.g.i. Friday\'s',
                'description' => '',
                'id' => 166,
                'name' => 'T.g.i Friday\'s Poppers Cream Cheese Stuffed Jalapenos',
                'price' => '0.000000',
                'upc12' => '046704063316',
                'upc14' => '00046704063316',
            ),
            166 => 
            array (
                'brand' => 'Krazy Glue',
                'description' => '',
                'id' => 167,
                'name' => 'Instant Krazy Glue - 4 Ct',
                'price' => '0.000000',
                'upc12' => '070158008203',
                'upc14' => '00070158008203',
            ),
            167 => 
            array (
                'brand' => 'Pepperidge Farm',
                'description' => '',
                'id' => 168,
                'name' => 'Pepperidge Farm Puff Pastry Turnovers Apple - 4 Ct',
                'price' => '0.000000',
                'upc12' => '051000075017',
                'upc14' => '00051000075017',
            ),
            168 => 
            array (
                'brand' => 'Campbell\'s',
                'description' => '',
                'id' => 170,
                'name' => 'Campbell\'s Soup On The Go Chicken & Star Shaped Pasta Soup',
                'price' => '0.000000',
                'upc12' => '051000150769',
                'upc14' => '00051000150769',
            ),
            169 => 
            array (
                'brand' => 'Hi-c',
                'description' => '',
                'id' => 171,
                'name' => 'Hi-c Boppin\' Strawberry Fruit Juice Boxes- 10 Pk',
                'price' => '0.000000',
                'upc12' => '025000008054',
                'upc14' => '00025000008054',
            ),
            170 => 
            array (
                'brand' => 'Werther\'s Original',
                'description' => '',
                'id' => 172,
                'name' => 'Werther\'s Original Sugar Free Hard Candies',
                'price' => '0.000000',
                'upc12' => '072799831400',
                'upc14' => '00072799831400',
            ),
            171 => 
            array (
                'brand' => 'Cesar',
                'description' => '',
                'id' => 173,
                'name' => 'Cesar Canine Cuisine Filet Mignon Flavor',
                'price' => '0.000000',
                'upc12' => '023100017792',
                'upc14' => '00023100017792',
            ),
            172 => 
            array (
                'brand' => 'Freshpet',
                'description' => '',
                'id' => 174,
                'name' => 'Freshpet Chilly Wags Natural Vanilla Flavor Frozen Treats For Dogs - 4 Ct',
                'price' => '0.000000',
                'upc12' => '627975010164',
                'upc14' => '00627975010164',
            ),
            173 => 
            array (
                'brand' => 'Boston Market',
                'description' => '',
                'id' => 175,
                'name' => 'Boston Market Spaghetti With Meatballs',
                'price' => '0.000000',
                'upc12' => '738912022437',
                'upc14' => '00738912022437',
            ),
            174 => 
            array (
                'brand' => 'Osem',
                'description' => '',
                'id' => 176,
                'name' => 'Osem Soup & Seasoning Mix Consomme',
                'price' => '0.000000',
                'upc12' => '077544000506',
                'upc14' => '00077544000506',
            ),
            175 => 
            array (
                'brand' => 'Smart Living',
                'description' => '',
                'id' => 177,
                'name' => 'Smart Living Assorted Binder Clips - 10 Ct',
                'price' => '0.000000',
                'upc12' => '041520894281',
                'upc14' => '00041520894281',
            ),
            176 => 
            array (
                'brand' => 'Golden Krust',
                'description' => '',
                'id' => 178,
                'name' => 'Golden Krust Jamaican Style Spicy Beef Patties - 2 Ct',
                'price' => '0.000000',
                'upc12' => '721134700245',
                'upc14' => '00721134700245',
            ),
            177 => 
            array (
                'brand' => 'Eden Organic',
                'description' => '',
                'id' => 179,
                'name' => 'Eden Organic Shelled & Dry Roasted Pistachios',
                'price' => '0.000000',
                'upc12' => '024182000894',
                'upc14' => '00024182000894',
            ),
            178 => 
            array (
                'brand' => 'Mccormick',
                'description' => '',
                'id' => 180,
                'name' => 'Mccormick Grill Mates Mesquite Marinade',
                'price' => '0.000000',
                'upc12' => '052100025780',
                'upc14' => '00052100025780',
            ),
            179 => 
            array (
                'brand' => 'Urban Accents',
                'description' => '',
                'id' => 181,
                'name' => 'Urban Accents Fisherman\'s Wharf Seafood Seasoning',
                'price' => '0.000000',
                'upc12' => '635519115015',
                'upc14' => '00635519115015',
            ),
            180 => 
            array (
                'brand' => 'Tastykake',
                'description' => '',
                'id' => 182,
                'name' => 'Tastykake Cream Filled Koffee Kake Cupcakes Family Pack - 12 Ct',
                'price' => '0.000000',
                'upc12' => '025600002247',
                'upc14' => '00025600002247',
            ),
            181 => 
            array (
                'brand' => 'Kikkoman',
                'description' => '',
                'id' => 183,
                'name' => 'Kikkoman Soy Sauce',
                'price' => '0.000000',
                'upc12' => '041390000034',
                'upc14' => '00041390000034',
            ),
            182 => 
            array (
                'brand' => 'International Delight',
                'description' => '',
                'id' => 184,
                'name' => 'International Delight Coffee Creamer Irish Cream',
                'price' => '0.000000',
                'upc12' => '041271024883',
                'upc14' => '00041271024883',
            ),
            183 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 185,
                'name' => 'Ahold Honey Ham - Water Added',
                'price' => '0.000000',
                'upc12' => '237194000008',
                'upc14' => '00237194000008',
            ),
            184 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 186,
                'name' => 'Ahold Fitness Grape Creatine',
                'price' => '0.000000',
                'upc12' => '041520001641',
                'upc14' => '00041520001641',
            ),
            185 => 
            array (
                'brand' => 'Premier Protein',
                'description' => '',
                'id' => 187,
                'name' => 'Premier Protein Crisp Crunchy Protein Bar Peanut Butter Caramel - 6 Ct',
                'price' => '0.000000',
                'upc12' => '643843200024',
                'upc14' => '00643843200024',
            ),
            186 => 
            array (
                'brand' => 'Whitmor',
                'description' => '',
                'id' => 188,
                'name' => 'Whitmor Stacking Shelf White Grid Medium',
                'price' => '0.000000',
                'upc12' => '038861090595',
                'upc14' => '00038861090595',
            ),
            187 => 
            array (
                'brand' => 'Fruit Gushers',
                'description' => '',
                'id' => 189,
                'name' => 'Fruit Gushers Fruit Flavored Snacks Value Pack - 12 Ct',
                'price' => '0.000000',
                'upc12' => '016000147072',
                'upc14' => '00016000147072',
            ),
            188 => 
            array (
                'brand' => 'Suave',
                'description' => '',
                'id' => 190,
                'name' => 'Suave Naturals Everlasting Sunshine Shampoo',
                'price' => '0.000000',
                'upc12' => '079400188977',
                'upc14' => '00079400188977',
            ),
            189 => 
            array (
                'brand' => 'Hot Pockets',
                'description' => '',
                'id' => 191,
                'name' => 'Hot Pockets Sandwiches Cheeseburgers - 4 Ct',
                'price' => '0.000000',
                'upc12' => '043695103564',
                'upc14' => '00043695103564',
            ),
            190 => 
            array (
                'brand' => 'Turkey Hill',
                'description' => '',
                'id' => 192,
                'name' => 'Turkey Hill Premium Ice Cream Getrude Hawk Chocolates Box Of Chocolates',
                'price' => '0.000000',
                'upc12' => '020735112298',
                'upc14' => '00020735112298',
            ),
            191 => 
            array (
                'brand' => 'Currant Affair',
                'description' => '',
                'id' => 193,
                'name' => 'Currant Affair Black Currant Cranberry Juice',
                'price' => '0.000000',
                'upc12' => '870397001603',
                'upc14' => '00870397001603',
            ),
            192 => 
            array (
                'brand' => 'Spectrum Essentials',
                'description' => '',
                'id' => 194,
                'name' => 'Spectrum Essentials Prenatal Dha Softgels - 60 Ct',
                'price' => '0.000000',
                'upc12' => '022506474703',
                'upc14' => '00022506474703',
            ),
            193 => 
            array (
                'brand' => 'Lundberg',
                'description' => '',
                'id' => 195,
                'name' => 'Lundberg Risotto Butternut Squash',
                'price' => '0.000000',
                'upc12' => '073416020054',
                'upc14' => '00073416020054',
            ),
            194 => 
            array (
                'brand' => 'Twin Dragon',
                'description' => '',
                'id' => 196,
                'name' => 'Twin Dragon Cookies Almond Chinese Style',
                'price' => '0.000000',
                'upc12' => '074699030167',
                'upc14' => '00074699030167',
            ),
            195 => 
            array (
                'brand' => 'Gerber',
                'description' => '',
                'id' => 197,
                'name' => 'Gerber Multigrain Cereal',
                'price' => '0.000000',
                'upc12' => '015000070038',
                'upc14' => '00015000070038',
            ),
            196 => 
            array (
                'brand' => 'Pure Protein',
                'description' => '',
                'id' => 198,
                'name' => 'Pure Protein Soft Baked Protein Bar Double Double Chocolate Vanilla Crunch',
                'price' => '0.000000',
                'upc12' => '749826539010',
                'upc14' => '00749826539010',
            ),
            197 => 
            array (
                'brand' => 'Burt\'s Bees',
                'description' => '',
                'id' => 199,
                'name' => 'Burt\'s Bees Green Tea & Lemongrass Hand Soap',
                'price' => '0.000000',
                'upc12' => '792850233997',
                'upc14' => '00792850233997',
            ),
            198 => 
            array (
                'brand' => 'Riceselect',
                'description' => '',
                'id' => 200,
                'name' => 'Rice Select Royal Blend Whole Grain',
                'price' => '0.000000',
                'upc12' => '074401760320',
                'upc14' => '00074401760320',
            ),
            199 => 
            array (
                'brand' => 'Weight Watchers',
                'description' => '',
                'id' => 201,
                'name' => 'Weight Watchers Smart Ones Smart Delights Strawberry Shortcake - 4 Ct',
                'price' => '0.000000',
                'upc12' => '025800023196',
                'upc14' => '00025800023196',
            ),
            200 => 
            array (
                'brand' => 'Cap\'n Crunch',
                'description' => '',
                'id' => 202,
                'name' => 'Cap\'n Crunch\'s Peanut Butter Crunch Cereal',
                'price' => '0.000000',
                'upc12' => '030000065075',
                'upc14' => '00030000065075',
            ),
            201 => 
            array (
                'brand' => 'Kedem',
                'description' => '',
                'id' => 203,
                'name' => 'Kedem Kids Animal Cookies',
                'price' => '0.000000',
                'upc12' => '073490129414',
                'upc14' => '00073490129414',
            ),
            202 => 
            array (
                'brand' => 'Scotch',
                'description' => '',
                'id' => 204,
                'name' => 'Scotch Duct Tape Pearl White',
                'price' => '0.000000',
                'upc12' => '051141915302',
                'upc14' => '00051141915302',
            ),
            203 => 
            array (
                'brand' => 'Rienzi',
                'description' => '',
                'id' => 205,
                'name' => 'Rienzi White Clam Italian Style Pasta Sauce',
                'price' => '0.000000',
                'upc12' => '075717952089',
                'upc14' => '00075717952089',
            ),
            204 => 
            array (
                'brand' => 'Newman\'s Own',
                'description' => '',
                'id' => 206,
                'name' => 'Newman\'s Own Lite Italian Dressing',
                'price' => '0.000000',
                'upc12' => '020662000040',
                'upc14' => '00020662000040',
            ),
            205 => 
            array (
                'brand' => 'Bobs Red Mill',
                'description' => '',
                'id' => 207,
                'name' => 'Flour Gf Meal Hzlnut',
                'price' => '0.000000',
                'upc12' => '039978007506',
                'upc14' => '00039978007506',
            ),
            206 => 
            array (
                'brand' => 'Graeter\'s',
                'description' => '',
                'id' => 208,
                'name' => 'Graeter\'s Ice Cream Peppermint Stick',
                'price' => '0.000000',
                'upc12' => '731493040005',
                'upc14' => '00731493040005',
            ),
            207 => 
            array (
                'brand' => 'Pepperidge Farm',
                'description' => '',
                'id' => 209,
                'name' => 'Pepperidge Farm Entertaining Quartet Distinctive Crackers',
                'price' => '0.000000',
                'upc12' => '014100074472',
                'upc14' => '00014100074472',
            ),
            208 => 
            array (
                'brand' => 'Lifestyle Foods',
                'description' => '',
                'id' => 210,
                'name' => 'Lifestyle Foods Salad Blt With Ranch',
                'price' => '0.000000',
                'upc12' => '898425001050',
                'upc14' => '00898425001050',
            ),
            209 => 
            array (
                'brand' => 'Bonta D\' Italia',
                'description' => '',
                'id' => 211,
                'name' => 'Schar Bonta D\' Italia Anellini Gluten-free',
                'price' => '0.000000',
                'upc12' => '810757010203',
                'upc14' => '00810757010203',
            ),
            210 => 
            array (
                'brand' => 'Crunchmaster',
                'description' => '',
                'id' => 212,
                'name' => 'Crunchmaster Multi-grain Sea Salt Crackers',
                'price' => '0.000000',
                'upc12' => '879890000113',
                'upc14' => '00879890000113',
            ),
            211 => 
            array (
                'brand' => 'Jays',
                'description' => '',
                'id' => 213,
                'name' => 'Jays Pork Skins',
                'price' => '0.000000',
                'upc12' => '041200097018',
                'upc14' => '00041200097018',
            ),
            212 => 
            array (
                'brand' => 'Morningstar',
                'description' => '',
                'id' => 214,
                'name' => 'Morningstar Farms Grillers California Turk\'y Veggie Burgers - 4 Ct',
                'price' => '0.000000',
                'upc12' => '028989491923',
                'upc14' => '00028989491923',
            ),
            213 => 
            array (
                'brand' => 'So Delicious',
                'description' => '',
                'id' => 215,
                'name' => 'So Delicious Dairy Free Coconut Milk Frozen Dessert Coconut',
                'price' => '0.000000',
                'upc12' => '744473470334',
                'upc14' => '00744473470334',
            ),
            214 => 
            array (
                'brand' => 'Head & Shoulders',
                'description' => '',
                'id' => 216,
                'name' => 'Head & Shoulders 2 In1 Smooth & Silky Dandruff Shampoo + Conditioner',
                'price' => '0.000000',
                'upc12' => '037000071297',
                'upc14' => '00037000071297',
            ),
            215 => 
            array (
                'brand' => 'Dominex',
                'description' => '',
                'id' => 217,
                'name' => 'Dominex Veggie Fries Italian Style Eggplant Fries',
                'price' => '0.000000',
                'upc12' => '727806012289',
                'upc14' => '00727806012289',
            ),
            216 => 
            array (
                'brand' => 'Earth\'s Best',
                'description' => '',
                'id' => 218,
                'name' => 'Earth\'s Best Organic Stage 2 Orange Banana Baby Food Puree',
                'price' => '0.000000',
                'upc12' => '023923330054',
                'upc14' => '00023923330054',
            ),
            217 => 
            array (
                'brand' => 'Soft & Precious',
                'description' => '',
                'id' => 219,
                'name' => 'Soft Precious Lavender & Chamomile Nursery Jelly',
                'price' => '0.000000',
                'upc12' => '720947004359',
                'upc14' => '00720947004359',
            ),
            218 => 
            array (
                'brand' => 'Burt\'s Bees',
                'description' => '',
                'id' => 220,
                'name' => 'Burt\'s Bees Naturally Ageless Line Diminishing Day Lotion',
                'price' => '0.000000',
                'upc12' => '792850320994',
                'upc14' => '00792850320994',
            ),
            219 => 
            array (
                'brand' => 'Alpina',
                'description' => '',
                'id' => 221,
                'name' => 'Alpina Revive Blueberry Non-fat Greek Yogurt + Antioxidant Berries',
                'price' => '0.000000',
                'upc12' => '083322015815',
                'upc14' => '00083322015815',
            ),
            220 => 
            array (
                'brand' => 'Green Giant',
                'description' => '',
                'id' => 222,
                'name' => 'Green Giant Fresh Rosemary',
                'price' => '0.000000',
                'upc12' => '605806028243',
                'upc14' => '00605806028243',
            ),
            221 => 
            array (
                'brand' => 'Tyson',
                'description' => '',
                'id' => 223,
                'name' => 'Tyson Any\'tizers Chicken Bites Boneless Buffalo Style',
                'price' => '0.000000',
                'upc12' => '023700014054',
                'upc14' => '00023700014054',
            ),
            222 => 
            array (
                'brand' => 'Playtex',
                'description' => '',
                'id' => 224,
                'name' => 'Playtex Nurser Naturalatch Silicone Nipples 3m+',
                'price' => '0.000000',
                'upc12' => '078300057857',
                'upc14' => '00078300057857',
            ),
            223 => 
            array (
                'brand' => 'Envirokidz',
                'description' => '',
                'id' => 225,
                'name' => 'Envirokidz Organic Koala Crisp Cereal',
                'price' => '0.000000',
                'upc12' => '058449860037',
                'upc14' => '00058449860037',
            ),
            224 => 
            array (
                'brand' => 'Chef Express',
                'description' => '',
                'id' => 226,
                'name' => 'Chef Express Pork Back Ribs Fully Cooked',
                'price' => '0.000000',
                'upc12' => '060795871933',
                'upc14' => '00060795871933',
            ),
            225 => 
            array (
                'brand' => 'Zarbee\'s',
                'description' => '',
                'id' => 227,
                'name' => 'Zarbee\'s Naturals Children\'s Cough Syrup Nighttime Natural Grape Flavor',
                'price' => '0.000000',
                'upc12' => '898115002329',
                'upc14' => '00898115002329',
            ),
            226 => 
            array (
                'brand' => 'Mccormick',
                'description' => '',
                'id' => 228,
                'name' => 'Mccormick Celery Salt',
                'price' => '0.000000',
                'upc12' => '052100005089',
                'upc14' => '00052100005089',
            ),
            227 => 
            array (
                'brand' => 'Ritz',
                'description' => '',
                'id' => 229,
                'name' => 'Nabisco Ritz Crackerfuls Classic Cheddar Filled Crackers - 6 Ct',
                'price' => '0.000000',
                'upc12' => '044000022822',
                'upc14' => '00044000022822',
            ),
            228 => 
            array (
                'brand' => 'Finish',
                'description' => '',
                'id' => 230,
                'name' => 'Jet-dry Finish Rinse Agent Green Apple Scent',
                'price' => '0.000000',
                'upc12' => '051700756834',
                'upc14' => '00051700756834',
            ),
            229 => 
            array (
                'brand' => 'Hawaiian Punch',
                'description' => '',
                'id' => 231,
                'name' => 'Hawaiian Punch Lemon Berry Squeeze - 6 Pk',
                'price' => '0.000000',
                'upc12' => '014800645323',
                'upc14' => '00014800645323',
            ),
            230 => 
            array (
                'brand' => 'Scunci',
                'description' => '',
                'id' => 232,
                'name' => 'Scunci No-slip Grip  Evolution Hair Ties Assorted Colors - 28 Ct',
                'price' => '0.000000',
                'upc12' => '043194385737',
                'upc14' => '00043194385737',
            ),
            231 => 
            array (
                'brand' => 'Meow Mix',
                'description' => '',
                'id' => 233,
                'name' => 'Meow Mix Kitten Li\'l Nibbles',
                'price' => '0.000000',
                'upc12' => '829274007108',
                'upc14' => '00829274007108',
            ),
            232 => 
            array (
                'brand' => 'Bionaturae',
                'description' => '',
                'id' => 234,
                'name' => 'Bionaturae Organic Spaghetti Gluten Free',
                'price' => '0.000000',
                'upc12' => '799210434018',
                'upc14' => '00799210434018',
            ),
            233 => 
            array (
                'brand' => 'Kraft',
                'description' => '',
                'id' => 235,
                'name' => 'Kraft Philadelphia Italian Cheese & Herb Cooking Creme',
                'price' => '0.000000',
                'upc12' => '021000006892',
                'upc14' => '00021000006892',
            ),
            234 => 
            array (
                'brand' => 'Companion',
                'description' => '',
                'id' => 236,
                'name' => 'Companion Cat Toy Mouse Duo - 2 Ct',
                'price' => '0.000000',
                'upc12' => '041520875983',
                'upc14' => '00041520875983',
            ),
            235 => 
            array (
                'brand' => 'Mayte',
                'description' => '',
                'id' => 237,
                'name' => 'Mayte Platanitos Plantain Chips Garlic',
                'price' => '0.000000',
                'upc12' => '856414001092',
                'upc14' => '00856414001092',
            ),
            236 => 
            array (
                'brand' => 'Reese',
                'description' => '',
                'id' => 238,
                'name' => 'Reese Whole Water Chestnuts',
                'price' => '0.000000',
                'upc12' => '070670000495',
                'upc14' => '00070670000495',
            ),
            237 => 
            array (
                'brand' => 'Nasoya',
                'description' => '',
                'id' => 239,
                'name' => 'Nasoya Tofu Plus Organic Tofu Firm',
                'price' => '0.000000',
                'upc12' => '025484006898',
                'upc14' => '00025484006898',
            ),
            238 => 
            array (
                'brand' => 'Arizona',
                'description' => '',
                'id' => 240,
                'name' => 'Arizona Arnold Palmer Lite Half & Half Green Tea Lemonade',
                'price' => '0.000000',
                'upc12' => '613008733155',
                'upc14' => '00613008733155',
            ),
            239 => 
            array (
                'brand' => 'Softlips',
                'description' => '',
                'id' => 241,
                'name' => 'Softlips Cube Lip Protectant Pomegranate Blueberry',
                'price' => '0.000000',
                'upc12' => '310742016574',
                'upc14' => '00310742016574',
            ),
            240 => 
            array (
                'brand' => 'Marie Callender\'s',
                'description' => '',
                'id' => 242,
                'name' => 'Marie Callender\'s Hearty Three Meat Marinara Bake',
                'price' => '0.000000',
                'upc12' => '021131350277',
                'upc14' => '00021131350277',
            ),
            241 => 
            array (
                'brand' => 'Softsoap',
                'description' => '',
                'id' => 243,
                'name' => 'Softsoap Body Butter Strawberry Smoother Body Smoothing Wash',
                'price' => '0.000000',
                'upc12' => '074182289195',
                'upc14' => '00074182289195',
            ),
            242 => 
            array (
                'brand' => 'Companion',
                'description' => '',
                'id' => 244,
                'name' => 'Ahold Companion Smoky Hambone',
                'price' => '0.000000',
                'upc12' => '041520021878',
                'upc14' => '00041520021878',
            ),
            243 => 
            array (
                'brand' => 'Pure Power',
                'description' => '',
                'id' => 245,
                'name' => 'Pure Power Tall Kitchen Bags Handle Tie 13 Gal - 26 Bags',
                'price' => '0.000000',
                'upc12' => '688267007538',
                'upc14' => '00688267007538',
            ),
            244 => 
            array (
                'brand' => 'House Of Tsang',
                'description' => '',
                'id' => 246,
                'name' => 'House Of Tsang Flavoring Oil Pure Sesame Seed Oil',
                'price' => '0.000000',
                'upc12' => '075050006241',
                'upc14' => '00075050006241',
            ),
            245 => 
            array (
                'brand' => 'Sauer\'s',
                'description' => '',
                'id' => 247,
                'name' => 'Sauer\'s Slow Cooker Mix Chili',
                'price' => '0.000000',
                'upc12' => '052500024031',
                'upc14' => '00052500024031',
            ),
            246 => 
            array (
                'brand' => 'Olay',
                'description' => '',
                'id' => 248,
                'name' => 'Olay Fresh Effects S\'wipe Out! Refreshing Make-up Removal Cloths 20 Count',
                'price' => '0.000000',
                'upc12' => '075609191619',
                'upc14' => '00075609191619',
            ),
            247 => 
            array (
                'brand' => 'Hp Cookie Company',
                'description' => '',
                'id' => 249,
                'name' => 'Hp Cookie Company Fancy Cookie Mix',
                'price' => '0.000000',
                'upc12' => '242008000006',
                'upc14' => '00242008000006',
            ),
            248 => 
            array (
                'brand' => 'Pedigree',
                'description' => '',
                'id' => 250,
                'name' => 'Pedigree Jumbone Small/medium Snack Food For Dogs - 2 Ct',
                'price' => '0.000000',
                'upc12' => '058496019525',
                'upc14' => '00058496019525',
            ),
            249 => 
            array (
                'brand' => 'Stp',
                'description' => '',
                'id' => 251,
                'name' => 'Stp Gas Treatment',
                'price' => '0.000000',
                'upc12' => '071153785731',
                'upc14' => '00071153785731',
            ),
            250 => 
            array (
                'brand' => 'Del Monte',
                'description' => '',
                'id' => 252,
                'name' => 'Del Monte Diced Apples & Pears In Extra Light Syrup With Caramel Flavor - 4 Ct',
                'price' => '0.000000',
                'upc12' => '024000522539',
                'upc14' => '00024000522539',
            ),
            251 => 
            array (
                'brand' => 'Endangered Species',
                'description' => '',
                'id' => 253,
                'name' => 'Endangered Species Chocolate Milk Chocolate With Almonds Bar Natural - Sandhill Crane',
                'price' => '0.000000',
                'upc12' => '037014242492',
                'upc14' => '00037014242492',
            ),
            252 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 254,
                'name' => 'Ahold Conversation Hearts Candy',
                'price' => '0.000000',
                'upc12' => '688267033742',
                'upc14' => '00688267033742',
            ),
            253 => 
            array (
                'brand' => 'Reddi Gourmet',
                'description' => '',
                'id' => 255,
                'name' => 'Reddi Gourmet Chicken Breast Italian Style Panko Breaded Boneless Skinless - 4 Ct',
                'price' => '0.000000',
                'upc12' => '000000000000',
                'upc14' => '00000000000000',
            ),
            254 => 
            array (
                'brand' => 'Edy\'s',
                'description' => '',
                'id' => 256,
                'name' => 'Edy\'s Outshine Fruit Bars Mango - 6 Ct',
                'price' => '0.000000',
                'upc12' => '041548751504',
                'upc14' => '00041548751504',
            ),
            255 => 
            array (
                'brand' => 'Hershey\'s',
                'description' => '',
                'id' => 257,
                'name' => 'Hershey\'s Special Dark Pieces Dark Chocolate',
                'price' => '0.000000',
                'upc12' => '034000114221',
                'upc14' => '00034000114221',
            ),
            256 => 
            array (
                'brand' => 'Nature Made',
                'description' => '',
                'id' => 258,
                'name' => 'Nature Made Fish Oil Liquid Softgels 1000mg - 90 Ct',
                'price' => '0.000000',
                'upc12' => '031604026622',
                'upc14' => '00031604026622',
            ),
            257 => 
            array (
                'brand' => 'Careone',
                'description' => '',
                'id' => 259,
                'name' => 'Careone Clifford The Big Red Dog Chunky Grip Toothbrush Extra Soft',
                'price' => '0.000000',
                'upc12' => '041520879806',
                'upc14' => '00041520879806',
            ),
            258 => 
            array (
                'brand' => 'Deerfields Gluten Free',
                'description' => '',
                'id' => 260,
                'name' => 'Triple Chip Gluten Free Cookies',
                'price' => '0.000000',
                'upc12' => '610358991020',
                'upc14' => '00610358991020',
            ),
            259 => 
            array (
                'brand' => 'Companion',
                'description' => '',
                'id' => 261,
                'name' => 'Companion Dog Toy Plush Bone Puppy Toy With Squeaker',
                'price' => '0.000000',
                'upc12' => '041520012807',
                'upc14' => '00041520012807',
            ),
            260 => 
            array (
                'brand' => 'Firstline',
                'description' => '',
                'id' => 262,
                'name' => 'Firstline Evolve Conditioning Cap Platinum',
                'price' => '0.000000',
                'upc12' => '761809039089',
                'upc14' => '00761809039089',
            ),
            261 => 
            array (
                'brand' => 'Afterbite',
                'description' => '',
                'id' => 263,
                'name' => 'Afterbite The Itch Eraser Soothing Cream Kids',
                'price' => '0.000000',
                'upc12' => '044224023841',
                'upc14' => '00044224023841',
            ),
            262 => 
            array (
                'brand' => 'Flavrz',
                'description' => '',
                'id' => 264,
                'name' => 'Flavrz Tropica Drink Mix Pouches - 6 Ct',
                'price' => '0.000000',
                'upc12' => '705105512419',
                'upc14' => '00705105512419',
            ),
            263 => 
            array (
                'brand' => 'Pepperidge Farm',
                'description' => '',
                'id' => 265,
                'name' => 'Pepperidge Farm Baked Naturals Sesame Sticks',
                'price' => '0.000000',
                'upc12' => '014100089476',
                'upc14' => '00014100089476',
            ),
            264 => 
            array (
                'brand' => 'Russell Stover',
                'description' => '',
                'id' => 266,
                'name' => 'Russell Stover Assorted Fine Chocolates',
                'price' => '0.000000',
                'upc12' => '077260092021',
                'upc14' => '00077260092021',
            ),
            265 => 
            array (
                'brand' => 'Utz',
                'description' => '',
                'id' => 267,
                'name' => 'Utz Kettle Classics Maui Bbq Crunchy Potato Chips',
                'price' => '0.000000',
                'upc12' => '041780001566',
                'upc14' => '00041780001566',
            ),
            266 => 
            array (
                'brand' => 'Pediasure',
                'description' => '',
                'id' => 268,
                'name' => 'Pediasure Shake Vanilla - 6 Ct',
                'price' => '0.000000',
                'upc12' => '070074580500',
                'upc14' => '00070074580500',
            ),
            267 => 
            array (
                'brand' => 'Vagisil',
                'description' => '',
                'id' => 269,
                'name' => 'Vagisil Medicated Anti-itch Creme Regular Strength',
                'price' => '0.000000',
                'upc12' => '011509003676',
                'upc14' => '00011509003676',
            ),
            268 => 
            array (
                'brand' => 'Milani',
                'description' => '',
                'id' => 270,
                'name' => 'Milani Illuminating Face Powder #02 Hermosa Rose',
                'price' => '0.000000',
                'upc12' => '717489750028',
                'upc14' => '00717489750028',
            ),
            269 => 
            array (
                'brand' => 'Mccormick',
                'description' => '',
                'id' => 271,
                'name' => 'Mccormick Chili Tex-mex Seasoning Mix',
                'price' => '0.000000',
                'upc12' => '052100107790',
                'upc14' => '00052100107790',
            ),
            270 => 
            array (
                'brand' => 'Mother\'s Cupboard',
                'description' => '',
                'id' => 272,
                'name' => 'Mother\'s Cupboard Chocolate Chip Cookie Dough',
                'price' => '0.000000',
                'upc12' => '092630010009',
                'upc14' => '00092630010009',
            ),
            271 => 
            array (
                'brand' => 'Lillie Q\'s',
                'description' => '',
                'id' => 273,
                'name' => 'Lillie\'s Q Barbeque Sauces & Rubs Hot Smoky',
                'price' => '0.000000',
                'upc12' => '718122681723',
                'upc14' => '00718122681723',
            ),
            272 => 
            array (
                'brand' => 'Lay\'s',
                'description' => '',
                'id' => 274,
                'name' => 'Lay\'s Potato Chips Classic - 6 Ct',
                'price' => '0.000000',
                'upc12' => '028400056588',
                'upc14' => '00028400056588',
            ),
            273 => 
            array (
                'brand' => 'Cheez-it',
                'description' => '',
                'id' => 275,
                'name' => 'Cheez-it Baked Snack Crackers White Cheddar',
                'price' => '0.000000',
                'upc12' => '024100704965',
                'upc14' => '00024100704965',
            ),
            274 => 
            array (
                'brand' => 'Giant',
                'description' => '',
                'id' => 276,
                'name' => 'Giant Roasted No Salt Peanuts',
                'price' => '0.000000',
                'upc12' => '041520203557',
                'upc14' => '00041520203557',
            ),
            275 => 
            array (
                'brand' => 'Rubinstein\'s',
                'description' => '',
                'id' => 277,
                'name' => 'Rubinstein\'s Wild Alaska Red Salmon',
                'price' => '0.000000',
                'upc12' => '072900000497',
                'upc14' => '00072900000497',
            ),
            276 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 278,
                'name' => 'Ahold Quiche Lorraine',
                'price' => '0.000000',
                'upc12' => '688267091025',
                'upc14' => '00688267091025',
            ),
            277 => 
            array (
                'brand' => 'Revlon',
                'description' => '',
                'id' => 279,
                'name' => 'Revlon Coutoure Hair Accessories Elastics - 9 Ct',
                'price' => '0.000000',
                'upc12' => '761318046998',
                'upc14' => '00761318046998',
            ),
            278 => 
            array (
                'brand' => 'Unique',
                'description' => '',
                'id' => 280,
                'name' => 'Unique "splits" Split-open Pretzel Extra Dark',
                'price' => '0.000000',
                'upc12' => '079927020217',
                'upc14' => '00079927020217',
            ),
            279 => 
            array (
                'brand' => 'Ogx',
                'description' => '',
                'id' => 281,
                'name' => 'Ogx Body Wash Hydrating Argan Oil Of Morocco',
                'price' => '0.000000',
                'upc12' => '022796918741',
                'upc14' => '00022796918741',
            ),
            280 => 
            array (
                'brand' => 'Doritos',
                'description' => '',
                'id' => 282,
                'name' => 'Doritos Nacho Cheese Tortilla Chips',
                'price' => '0.000000',
                'upc12' => '028400028196',
                'upc14' => '00028400028196',
            ),
            281 => 
            array (
                'brand' => 'Weight Watchers',
                'description' => '',
                'id' => 283,
                'name' => 'Weight Watchers Bread 100% Whole Wheat',
                'price' => '0.000000',
                'upc12' => '183791000012',
                'upc14' => '00183791000012',
            ),
            282 => 
            array (
                'brand' => 'Wrench',
                'description' => '',
                'id' => 284,
                'name' => 'Wrench Mints Sugar-free Candy Cane Peppermint Flavor Box',
                'price' => '0.000000',
                'upc12' => '893772001033',
                'upc14' => '00893772001033',
            ),
            283 => 
            array (
                'brand' => 'Phillips',
                'description' => '',
                'id' => 285,
                'name' => 'Phillips\' Colon Health Daily Probiotic Supplement Capsules - 60 Ct',
                'price' => '0.000000',
                'upc12' => '312843541207',
                'upc14' => '00312843541207',
            ),
            284 => 
            array (
                'brand' => 'Davinci',
                'description' => '',
                'id' => 286,
                'name' => 'Davinci Sun Dried Tomato Pesto',
                'price' => '0.000000',
                'upc12' => '070670008231',
                'upc14' => '00070670008231',
            ),
            285 => 
            array (
                'brand' => 'Careone',
                'description' => '',
                'id' => 287,
                'name' => 'Careone Medicated Jock Itch Spray',
                'price' => '0.000000',
                'upc12' => '341520319594',
                'upc14' => '00341520319594',
            ),
            286 => 
            array (
                'brand' => 'Ruffles',
                'description' => '',
                'id' => 288,
                'name' => 'Ruffles Baked! Cheddar & Sour Cream Potato Crisps',
                'price' => '0.000000',
                'upc12' => '028400071864',
                'upc14' => '00028400071864',
            ),
            287 => 
            array (
                'brand' => 'Pond\'s',
                'description' => '',
                'id' => 289,
                'name' => 'Pond\'s Cold Cream Cleanser',
                'price' => '0.000000',
                'upc12' => '305210013001',
                'upc14' => '00305210013001',
            ),
            288 => 
            array (
                'brand' => 'Schweppes',
                'description' => '',
                'id' => 290,
                'name' => 'Schweppes Sparkling Seltzer Water Orange - 12 Ct',
                'price' => '0.000000',
                'upc12' => '078000019636',
                'upc14' => '00078000019636',
            ),
            289 => 
            array (
                'brand' => 'Newman\'s Own',
                'description' => '',
                'id' => 291,
                'name' => 'Newman\'s Own Dressing Lite Sun Dried Tomato',
                'price' => '0.000000',
                'upc12' => '020662003461',
                'upc14' => '00020662003461',
            ),
            290 => 
            array (
                'brand' => 'Acadia',
                'description' => '',
                'id' => 292,
                'name' => 'Acadia Sparkling Spring Water Raspberry Lime - 6 Pk',
                'price' => '0.000000',
                'upc12' => '688267001161',
                'upc14' => '00688267001161',
            ),
            291 => 
            array (
                'brand' => 'Earth\'s Best',
                'description' => '',
                'id' => 293,
                'name' => 'Earth\'s Best Organic Stage 3 Spring Vegetable & Pasta',
                'price' => '0.000000',
                'upc12' => '023923700284',
                'upc14' => '00023923700284',
            ),
            292 => 
            array (
                'brand' => 'Sprout',
                'description' => '',
                'id' => 294,
                'name' => 'Sprout Organic Toddler Puree Tropical Oatmeal With Greek Yogurt',
                'price' => '0.000000',
                'upc12' => '818512014053',
                'upc14' => '00818512014053',
            ),
            293 => 
            array (
                'brand' => 'Imagine',
                'description' => '',
                'id' => 295,
                'name' => 'Almond Dream Vnla Bite',
                'price' => '0.000000',
                'upc12' => '084253284264',
                'upc14' => '00084253284264',
            ),
            294 => 
            array (
                'brand' => 'Ge',
                'description' => '',
                'id' => 296,
                'name' => 'Ge Soft White 40 Watts Decorative Light Bulb',
                'price' => '0.000000',
                'upc12' => '043168908795',
                'upc14' => '00043168908795',
            ),
            295 => 
            array (
                'brand' => 'Revlon',
                'description' => '',
                'id' => 297,
                'name' => 'Revlon 33010 Toenail Clip',
                'price' => '0.000000',
                'upc12' => '309972330109',
                'upc14' => '00309972330109',
            ),
            296 => 
            array (
                'brand' => 'Bran Flakes',
                'description' => '',
                'id' => 298,
                'name' => 'Post Bran Flakes Cereal',
                'price' => '0.000000',
                'upc12' => '884912113139',
                'upc14' => '00884912113139',
            ),
            297 => 
            array (
                'brand' => 'Nivea',
                'description' => '',
                'id' => 299,
                'name' => 'Nivea A Kiss Of Care & Color Lip Care Sheer Caramel',
                'price' => '0.000000',
                'upc12' => '072140015633',
                'upc14' => '00072140015633',
            ),
            298 => 
            array (
                'brand' => 'Ghirardelli',
                'description' => '',
                'id' => 300,
                'name' => 'Ghirardelli Chocolate Milk & Carmel Bar',
                'price' => '0.000000',
                'upc12' => '747599607646',
                'upc14' => '00747599607646',
            ),
            299 => 
            array (
                'brand' => 'Ito En',
                'description' => '',
                'id' => 301,
                'name' => 'Ito En Oi Ocha Dark Green Tea Unsweetened',
                'price' => '0.000000',
                'upc12' => '835143001832',
                'upc14' => '00835143001832',
            ),
            300 => 
            array (
                'brand' => 'Glad',
                'description' => '',
                'id' => 302,
                'name' => 'Glad Family Size Containers - 3 Ct',
                'price' => '0.000000',
                'upc12' => '012587701294',
                'upc14' => '00012587701294',
            ),
            301 => 
            array (
                'brand' => 'Nature\'s Earthly Choice',
                'description' => '',
                'id' => 303,
                'name' => 'Nature\'s Earthly Choice Three Continent Blend',
                'price' => '0.000000',
                'upc12' => '897034002205',
                'upc14' => '00897034002205',
            ),
            302 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 304,
                'name' => 'Ahold  White Bread Dough - 5 Ct',
                'price' => '0.000000',
                'upc12' => '688267099182',
                'upc14' => '00688267099182',
            ),
            303 => 
            array (
                'brand' => 'Roland',
                'description' => '',
                'id' => 305,
                'name' => 'Roland Extra Virgin Olive Oil Sicilian',
                'price' => '0.000000',
                'upc12' => '041224766723',
                'upc14' => '00041224766723',
            ),
            304 => 
            array (
                'brand' => 'Slim Jim',
                'description' => '',
                'id' => 306,
                'name' => 'Slim Jim Smokehouse Tender Steak Strips Kickin\' Carne Asada',
                'price' => '0.000000',
                'upc12' => '026200762357',
                'upc14' => '00026200762357',
            ),
            305 => 
            array (
                'brand' => 'Juven',
                'description' => '',
                'id' => 307,
                'name' => 'Juven Tissue Building Powder Packets Orange - 8 Ct',
                'price' => '0.000000',
                'upc12' => '659781566269',
                'upc14' => '00659781566269',
            ),
            306 => 
            array (
                'brand' => 'Kraft',
                'description' => '',
                'id' => 308,
                'name' => 'Kraft Singles Reduced Fat Cheese White American - 16 Ct',
                'price' => '0.000000',
                'upc12' => '021000024841',
                'upc14' => '00021000024841',
            ),
            307 => 
            array (
                'brand' => 'Categories',
                'description' => '',
                'id' => 309,
                'name' => 'Categories Catnip Filled Kitty Condor Catnip Cuddler',
                'price' => '0.000000',
                'upc12' => '847388061083',
                'upc14' => '00847388061083',
            ),
            308 => 
            array (
                'brand' => 'La Preferida',
                'description' => '',
                'id' => 310,
                'name' => 'La Preferida Jalapeno Nacho Slices Mild',
                'price' => '0.000000',
                'upc12' => '071524162536',
                'upc14' => '00071524162536',
            ),
            309 => 
            array (
                'brand' => 'Blue Bunny',
                'description' => '',
                'id' => 311,
                'name' => 'Blue Bunny Ice Cream Homemade Vanilla',
                'price' => '0.000000',
                'upc12' => '070640034024',
                'upc14' => '00070640034024',
            ),
            310 => 
            array (
                'brand' => 'Barney\'s',
                'description' => '',
                'id' => 312,
                'name' => 'Barney\'s Egg Rolls - 12 Ct',
                'price' => '0.000000',
                'upc12' => '076084002100',
                'upc14' => '00076084002100',
            ),
            311 => 
            array (
                'brand' => 'Stouffer\'s',
                'description' => '',
                'id' => 313,
                'name' => 'Stouffer\'s Chicken Parmigiana Dinner Large Family Size',
                'price' => '0.000000',
                'upc12' => '013800232809',
                'upc14' => '00013800232809',
            ),
            312 => 
            array (
                'brand' => 'Avalon Organics',
                'description' => '',
                'id' => 314,
                'name' => 'Avalon Organics Bath & Shower Gel Lavender',
                'price' => '0.000000',
                'upc12' => '654749351802',
                'upc14' => '00654749351802',
            ),
            313 => 
            array (
                'brand' => 'Luvs',
                'description' => '',
                'id' => 315,
                'name' => 'Luvs Ultra Leakguards Size 1 Diapers - 50 Ct',
                'price' => '0.000000',
                'upc12' => '037000262213',
                'upc14' => '00037000262213',
            ),
            314 => 
            array (
                'brand' => 'Earthbound Farm',
                'description' => '',
                'id' => 316,
                'name' => 'Earthbound Farm Organic Apple Crunchers Cinnamon',
                'price' => '0.000000',
                'upc12' => '032601055615',
                'upc14' => '00032601055615',
            ),
            315 => 
            array (
                'brand' => 'Glad',
                'description' => '',
                'id' => 317,
                'name' => 'Glad Big Bowl Containers & Lids - 3 Ct',
                'price' => '0.000000',
                'upc12' => '012587701119',
                'upc14' => '00012587701119',
            ),
            316 => 
            array (
                'brand' => 'Gazillion Bubbles',
                'description' => '',
                'id' => 318,
                'name' => 'Gazillion Bubbles',
                'price' => '0.000000',
                'upc12' => '021664353837',
                'upc14' => '00021664353837',
            ),
            317 => 
            array (
                'brand' => 'Triscuit',
                'description' => '',
                'id' => 319,
                'name' => 'Nabisco Triscuit Brown Rice Wheat Crackers Roasted Sweet Onion',
                'price' => '0.000000',
                'upc12' => '044000031596',
                'upc14' => '00044000031596',
            ),
            318 => 
            array (
                'brand' => 'Little Remedies',
                'description' => '',
                'id' => 320,
                'name' => 'Little Remedies For Fevers Children\'s Fever/pain Reliever Grape Flavor',
                'price' => '0.000000',
                'upc12' => '756184101780',
                'upc14' => '00756184101780',
            ),
            319 => 
            array (
                'brand' => 'Pedia Care',
                'description' => '',
                'id' => 321,
                'name' => 'Pediacare Children Pain Reliever Fever Reducer Grape Flavor',
                'price' => '0.000000',
                'upc12' => '814832010959',
                'upc14' => '00814832010959',
            ),
            320 => 
            array (
                'brand' => 'Wish-bone',
                'description' => '',
                'id' => 322,
                'name' => 'Wish-bone Honey Dijon Dressing Light',
                'price' => '0.000000',
                'upc12' => '041000005466',
                'upc14' => '00041000005466',
            ),
            321 => 
            array (
                'brand' => 'Nature Made',
                'description' => '',
                'id' => 323,
                'name' => 'Nature Made Multi Complete Dietary Softgels Original Formula - 60 Ct',
                'price' => '0.000000',
                'upc12' => '031604040444',
                'upc14' => '00031604040444',
            ),
            322 => 
            array (
                'brand' => 'Reddi Wip',
                'description' => '',
                'id' => 324,
                'name' => 'Reddi Wip Dairy Whipped Topping Original',
                'price' => '0.000000',
                'upc12' => '070272232041',
                'upc14' => '00070272232041',
            ),
            323 => 
            array (
                'brand' => 'Nestle',
                'description' => '',
                'id' => 325,
                'name' => 'Nestle Hot Cocoa Mix - 6 Ct',
                'price' => '0.000000',
                'upc12' => '050000397600',
                'upc14' => '00050000397600',
            ),
            324 => 
            array (
                'brand' => 'B&m',
                'description' => '',
                'id' => 326,
                'name' => 'B&m Vegetarian Baked Beans',
                'price' => '0.000000',
                'upc12' => '047800330319',
                'upc14' => '00047800330319',
            ),
            325 => 
            array (
                'brand' => 'Nature\'s Pride',
                'description' => '',
                'id' => 327,
                'name' => 'Nature\'s Path Organic Smart Bran With Psyllium & Oatbran',
                'price' => '0.000000',
                'upc12' => '058449771036',
                'upc14' => '00058449771036',
            ),
            326 => 
            array (
                'brand' => 'Crystal Geyser',
                'description' => '',
                'id' => 328,
                'name' => 'Crystal Geyser Natural Alpine Spring Water',
                'price' => '0.000000',
                'upc12' => '075140005154',
                'upc14' => '00075140005154',
            ),
            327 => 
            array (
                'brand' => 'Careone',
                'description' => '',
                'id' => 329,
                'name' => 'Careone Moisturizing Body Wash Tahitian Coconut',
                'price' => '0.000000',
                'upc12' => '041520035486',
                'upc14' => '00041520035486',
            ),
            328 => 
            array (
                'brand' => 'Dreamfields',
                'description' => '',
                'id' => 330,
                'name' => 'Dreamfields Angel Hair Pasta',
                'price' => '0.000000',
                'upc12' => '767387034010',
                'upc14' => '00767387034010',
            ),
            329 => 
            array (
                'brand' => 'Lance',
                'description' => '',
                'id' => 331,
                'name' => 'Lance Captain\'s Wafers Four Cheese Crackers - 8 Ct',
                'price' => '0.000000',
                'upc12' => '076410900186',
                'upc14' => '00076410900186',
            ),
            330 => 
            array (
                'brand' => 'Land O\'lakes',
                'description' => '',
                'id' => 332,
                'name' => 'Land O\'lakes Cocoa Classics Hazelnut & Chocolate Hot Cocoa Flavored Mix',
                'price' => '0.000000',
                'upc12' => '878326000116',
                'upc14' => '00878326000116',
            ),
            331 => 
            array (
                'brand' => 'Jason',
                'description' => '',
                'id' => 333,
                'name' => 'Jason Pure Natural Body Wash Revitalizing Citrus',
                'price' => '0.000000',
                'upc12' => '078522021162',
                'upc14' => '00078522021162',
            ),
            332 => 
            array (
                'brand' => 'Canada Dry',
                'description' => '',
                'id' => 334,
                'name' => 'Canada Dry Cranberry Ginger Ale Caffeine Free',
                'price' => '0.000000',
                'upc12' => '078000156461',
                'upc14' => '00078000156461',
            ),
            333 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 335,
                'name' => 'Ahold Cola Diet - 12 Ct',
                'price' => '0.000000',
                'upc12' => '688267097201',
                'upc14' => '00688267097201',
            ),
            334 => 
            array (
                'brand' => 'Smartykat',
                'description' => '',
                'id' => 336,
                'name' => 'Smartykat Lil\'freshy Litter Box Deodorizer',
                'price' => '0.000000',
                'upc12' => '786306398439',
                'upc14' => '00786306398439',
            ),
            335 => 
            array (
                'brand' => 'Kiss',
                'description' => '',
                'id' => 337,
                'name' => 'Kiss Nail Dress Retro French Or Full Strips - 22 Ct',
                'price' => '0.000000',
                'upc12' => '731509581096',
                'upc14' => '00731509581096',
            ),
            336 => 
            array (
                'brand' => 'Tab',
                'description' => '',
                'id' => 338,
                'name' => 'Tab - 6 Pk',
                'price' => '0.000000',
                'upc12' => '049000001938',
                'upc14' => '00049000001938',
            ),
            337 => 
            array (
                'brand' => 'Utz',
                'description' => '',
                'id' => 339,
                'name' => 'Utz Kettle Classics Potato Chips Crunchy',
                'price' => '0.000000',
                'upc12' => '041780001146',
                'upc14' => '00041780001146',
            ),
            338 => 
            array (
                'brand' => 'Pilot',
                'description' => '',
                'id' => 340,
                'name' => 'Pilot G2 Premium Gel Roller Fine 0.7mm Red Ink - 2 Ct',
                'price' => '0.000000',
                'upc12' => '072838310330',
                'upc14' => '00072838310330',
            ),
            339 => 
            array (
                'brand' => 'Earth\'s Best',
                'description' => '',
                'id' => 341,
                'name' => 'Earth\'s Best Organic Stage 3 Bananas & Strawberries',
                'price' => '0.000000',
                'upc12' => '023923200234',
                'upc14' => '00023923200234',
            ),
            340 => 
            array (
                'brand' => 'Stash',
                'description' => '',
                'id' => 342,
                'name' => 'Stash Premium Peach Black Tea Bags - 20 Ct',
                'price' => '0.000000',
                'upc12' => '077652082555',
                'upc14' => '00077652082555',
            ),
            341 => 
            array (
                'brand' => 'Coca-cola',
                'description' => '',
                'id' => 343,
                'name' => 'Coca-cola - 20 Ct',
                'price' => '0.000000',
                'upc12' => '049000014631',
                'upc14' => '00049000014631',
            ),
            342 => 
            array (
                'brand' => 'Kaytee',
                'description' => '',
                'id' => 344,
                'name' => 'Kaytee Sunflower Sensation Suet',
                'price' => '0.000000',
                'upc12' => '071859151373',
                'upc14' => '00071859151373',
            ),
            343 => 
            array (
                'brand' => 'Sony Music',
                'description' => '',
                'id' => 345,
                'name' => 'Superstar Christmas Cd',
                'price' => '0.000000',
                'upc12' => '886973215425',
                'upc14' => '00886973215425',
            ),
            344 => 
            array (
                'brand' => 'Ge',
                'description' => '',
                'id' => 346,
                'name' => 'Ge Charging Station 2 Usb/2 Ac Outlets',
                'price' => '0.000000',
                'upc12' => '030878145244',
                'upc14' => '00030878145244',
            ),
            345 => 
            array (
                'brand' => 'Smarties',
                'description' => '',
                'id' => 347,
                'name' => 'Smarties Candy Rolls',
                'price' => '0.000000',
                'upc12' => '011206212135',
                'upc14' => '00011206212135',
            ),
            346 => 
            array (
                'brand' => 'Patak\'s',
                'description' => '',
                'id' => 348,
                'name' => 'Patak\'s Tastes Of India Complete Meals Lentil Curry With Rice Dal Makhani Medium',
                'price' => '0.000000',
                'upc12' => '069276070933',
                'upc14' => '00069276070933',
            ),
            347 => 
            array (
                'brand' => 'Crest',
                'description' => '',
                'id' => 349,
                'name' => 'Crest Pro-health Soothing Smooth Mint Clinical Gum Protection Fluoride Toothpaste',
                'price' => '0.000000',
                'upc12' => '037000281887',
                'upc14' => '00037000281887',
            ),
            348 => 
            array (
                'brand' => 'Pure Leaf',
                'description' => '',
                'id' => 350,
                'name' => 'Pure Leaf Raspberry Flavor Real Brewed Tea',
                'price' => '0.000000',
                'upc12' => '012000286223',
                'upc14' => '00012000286223',
            ),
            349 => 
            array (
                'brand' => 'Brownberry',
                'description' => '',
                'id' => 351,
                'name' => 'Brownberry Healthfull 10 Grain Bread',
                'price' => '0.000000',
                'upc12' => '073410138502',
                'upc14' => '00073410138502',
            ),
            350 => 
            array (
                'brand' => 'Method',
                'description' => '',
                'id' => 352,
                'name' => 'Method Power Foam Dish Soap Pink Grapefruit',
                'price' => '0.000000',
                'upc12' => '817939013427',
                'upc14' => '00817939013427',
            ),
            351 => 
            array (
                'brand' => '3 Musketeers',
                'description' => '',
                'id' => 353,
                'name' => '3 Musketeers Chocolate Candy Bar',
                'price' => '0.000000',
                'upc12' => '040000006039',
                'upc14' => '00040000006039',
            ),
            352 => 
            array (
                'brand' => 'Bob Evans',
                'description' => '',
                'id' => 354,
                'name' => 'Bob Evans Tasteful Sides Glazed Apples',
                'price' => '0.000000',
                'upc12' => '075900005585',
                'upc14' => '00075900005585',
            ),
            353 => 
            array (
                'brand' => 'Ahold',
                'description' => '',
                'id' => 355,
                'name' => 'Ahold Sour Cream',
                'price' => '0.000000',
                'upc12' => '688267020629',
                'upc14' => '00688267020629',
            ),
            354 => 
            array (
                'brand' => 'Diamond',
                'description' => '',
                'id' => 356,
                'name' => 'Diamond Shelled Walnuts',
                'price' => '0.000000',
                'upc12' => '070450032609',
                'upc14' => '00070450032609',
            ),
            355 => 
            array (
                'brand' => 'Yoplait',
                'description' => '',
                'id' => 357,
                'name' => 'Yoplait Original 99% Fat Free Strawberry Low Fat Yogurt',
                'price' => '0.000000',
                'upc12' => '070470003009',
                'upc14' => '00070470003009',
            ),
            356 => 
            array (
                'brand' => 'Homeostasis Labs',
                'description' => '',
                'id' => 358,
                'name' => 'Homeostasis Labs 100% Natural Allergy Relief Homeopathic Medicine Tablets - 50 Ct',
                'price' => '0.000000',
                'upc12' => '899843002117',
                'upc14' => '00899843002117',
            ),
            357 => 
            array (
                'brand' => 'Nutri-grain',
                'description' => '',
                'id' => 359,
                'name' => 'Kellogg\'s Nutri-grain Fruit & Oat Harvest Bars Country Strawberry - 5 Ct',
                'price' => '0.000000',
                'upc12' => '038000737381',
                'upc14' => '00038000737381',
            ),
            358 => 
            array (
                'brand' => 'Sierra Mist',
                'description' => '',
                'id' => 360,
                'name' => 'Sierra Mist Natural Caffeine Free Lemon-lime Soda - 24 Ct',
                'price' => '0.000000',
                'upc12' => '012000377747',
                'upc14' => '00012000377747',
            ),
            359 => 
            array (
                'brand' => 'Olay',
                'description' => '',
                'id' => 361,
                'name' => 'Olay Soothing Cucumber Body Lotion 11.8 Fl Oz',
                'price' => '0.000000',
                'upc12' => '075609190445',
                'upc14' => '00075609190445',
            ),
            360 => 
            array (
                'brand' => 'Healthy Times',
                'description' => '',
                'id' => 362,
                'name' => 'Healthy Times Baby\'s Herbal Garden Sweet Violet Baby Lotion',
                'price' => '0.000000',
                'upc12' => '048685501023',
                'upc14' => '00048685501023',
            ),
            361 => 
            array (
                'brand' => 'Oxi Clean',
                'description' => '',
                'id' => 363,
                'name' => 'Oxi Clean Laundry Detergent Free - 74 Loads',
                'price' => '0.000000',
                'upc12' => '757037000090',
                'upc14' => '00757037000090',
            ),
            362 => 
            array (
                'brand' => 'I Can\'t Believe It\'s Not Butter',
                'description' => '',
                'id' => 364,
                'name' => 'I Can\'t Believe It\'s Not Butter! Deliciously Simple 70% Vegetable Oil Spread',
                'price' => '0.000000',
                'upc12' => '040600327800',
                'upc14' => '00040600327800',
            ),
            363 => 
            array (
                'brand' => 'Rice Krispies',
                'description' => '',
                'id' => 365,
                'name' => 'Kellogg\'s Cereal Rice Krispies',
                'price' => '0.000000',
                'upc12' => '038000318443',
                'upc14' => '00038000318443',
            ),
            364 => 
            array (
                'brand' => 'Yogi',
                'description' => '',
                'id' => 366,
                'name' => 'Yogi Women\'s Raspberry Leaf Tea',
                'price' => '0.000000',
                'upc12' => '076950450431',
                'upc14' => '00076950450431',
            ),
            365 => 
            array (
                'brand' => 'Aussie',
                'description' => '',
                'id' => 367,
                'name' => 'Aussie Moist Shampoo',
                'price' => '0.000000',
                'upc12' => '038785353011',
                'upc14' => '00038785353011',
            ),
            366 => 
            array (
                'brand' => 'Sprout',
                'description' => '',
                'id' => 368,
                'name' => 'Sprout Organic Baby Food Whole Grain Oatmeal Cereal For Infants & Toddlers',
                'price' => '0.000000',
                'upc12' => '897415002336',
                'upc14' => '00897415002336',
            ),
            367 => 
            array (
                'brand' => 'L\'oreal Paris',
                'description' => '',
                'id' => 369,
                'name' => 'L\'oreal Paris Feria Permanent Haircolour Gel Light Brown 60 Natural',
                'price' => '0.000000',
                'upc12' => '071249230107',
                'upc14' => '00071249230107',
            ),
            368 => 
            array (
                'brand' => 'Well Roots',
                'description' => '',
                'id' => 370,
                'name' => 'Well Roots Liquid Soft-gels Testosterone Formula For Men - 30 Ct',
                'price' => '0.000000',
                'upc12' => '710363581688',
                'upc14' => '00710363581688',
            ),
            369 => 
            array (
                'brand' => 'Friskies',
                'description' => '',
                'id' => 371,
                'name' => 'Purina Friskies Rise & Shine Cat Food Sunny Chicken & Egg Scramble',
                'price' => '0.000000',
                'upc12' => '050000585014',
                'upc14' => '00050000585014',
            ),
            370 => 
            array (
                'brand' => 'Albanese',
                'description' => '',
                'id' => 372,
                'name' => 'Albanese Wild Thing Sour Gummi Worms',
                'price' => '0.000000',
                'upc12' => '634418625526',
                'upc14' => '00634418625526',
            ),
            371 => 
            array (
                'brand' => 'Combat',
                'description' => '',
                'id' => 373,
                'name' => 'Combat Source Kill Small Roach Advanced Formula Bait Stations - 12 Ct',
                'price' => '0.000000',
                'upc12' => '023400419104',
                'upc14' => '00023400419104',
            ),
            372 => 
            array (
                'brand' => 'Bausch + Lomb',
                'description' => '',
                'id' => 374,
                'name' => 'Bausch + Lomb Biotrue Multi-purpose Contact Solution',
                'price' => '0.000000',
                'upc12' => '310119035863',
                'upc14' => '00310119035863',
            ),
            373 => 
            array (
                'brand' => 'Arm & Hammer',
                'description' => '',
                'id' => 375,
                'name' => 'Arm & Hammer Advance White Brilliant Sparkle Fluoride Anti-cavity Gel Toothpaste',
                'price' => '0.000000',
                'upc12' => '033200186243',
                'upc14' => '00033200186243',
            ),
            374 => 
            array (
                'brand' => 'Steaz',
                'description' => '',
                'id' => 376,
                'name' => 'Steaz Zero Calorie Iced Teaz Half & Half Green Tea With Lemonade',
                'price' => '0.000000',
                'upc12' => '856820160093',
                'upc14' => '00856820160093',
            ),
        ));
        
        
    }
}