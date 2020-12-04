<?php

namespace Database\Seeders;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'HIGHLANDER',
                "price"=>"714",
                "description"=>"Olive Green and Black checked casual shirt, has a spread collar, long sleeves, button placket, curved hem, and 1 patch pocket",
                "category"=>"shirts",
                "gender"=>"male",
                "productname"=>"Men Olive Green & Black Slim Fit Checked Casual Shirt",
                "gallery"=>"\storage\shirts,men\shirt1.jpg"
            ],
            [
                'name'=>'WROGN',
                "price"=>"1649",
                "description"=>"Navy blue checked casual shirt, has a spread collar, a full button placket, long sleeves, a patch pocket, curved hem ",
                "category"=>"shirts",
                "gender"=>"male",
                "productname"=>"Navy Blue Slim Fit Checked Casual Shirt
                ",
                "gallery"=>"\storage\shirts,men\shirt2.jpg"
                        ],
                        [
                            'name'=>'WROGN',
                "price"=>"1139",
                "description"=>"Navy blue printed casual shirt, has a spread collar, a full button placket, long sleeves, a patch pocket, a curved hem
                ",
                "category"=>"shirts",
                "gender"=>"male",
                "productname"=>"Men Navy Slim Fit Printed Casual Shirt
                ",
                "gallery"=>"\storage\shirts,men\shirt3.jpg"
                                    ],
                                    [
                'name'=>'WROGN',
                "price"=>"1239",
                "description"=>"Navy blue printed casual shirt, has a spread collar, a full button placket, long sleeves, a patch pocket, a curved hem
                ",
                "category"=>"shirts",
                "gender"=>"male",
                "productname"=>"Men Navy Slim Fit Printed Casual Shirt
                ",
                "gallery"=>"\storage\shirts,men\shirt4.jpg"
                                                ],
                                                [
                                                    'name'=>'WROGN',
                                                    "price"=>"1109",
                                                    "description"=>"Grey and black printed casual shirt, has a mandarin collar collar, button placket, long sleeves, curved hem  ",
                                                    "category"=>"shirts",
                                                    "gender"=>"male",
                                                    "productname"=>"Maroon Printed Slim Fit Casual Shirt
                                                    ",
                                                    "gallery"=>"\storage\shirts,men\shirt5.jpg"
                                                            ],
                                                            [
                                                                'name'=>'Roadster',
                                                    "price"=>"599",
                                                    "description"=>"Maroon printed casual shirt, has a mandarin collar with a short button placket, long sleeves with roll-up tab features, a chest pocket, a curved hem                                                 ",
                                                    "category"=>"shirts",
                                                    "gender"=>"male",
                                                    "productname"=>"Men Grey & Black Regular Fit Printed Casual Shirt                   ",
                                                    "gallery"=>"\storage\shirts,men\shirt6.jpg"
                                                                        ],
                                                                        [
                                                                            'name'=>'Roadster',
                                                                            "price"=>"899",
                                                                            "description"=>"Maroon solid casual shirt, has a mandarin collar, button placket, long sleeves, curved hem                                                                            ",
                                                                            "category"=>"shirts",
                                                                            "gender"=>"male",
                                                                            "productname"=>"Men Maroon Regular Fit Solid Casual Shirt                                                               ",
                                                                            "gallery"=>"\storage\shirts,men\shirt7.jpg"
                                                                                    ],
                                                                                    
            [
                                                                            'name'=>'Roadster',
                                                                            "price"=>"899",
                                                                            "description"=>"Teal Green solid casual shirt, has a mandarin collar, long sleeves, button placket, curved hem, and 1 patch pocket                                                                            ",
                                                                            "category"=>"shirts",
                                                                            "gender"=>"male",
                                                                            "productname"=>"Men Teal Green Regular Fit Solid Casual Shirt                                                                       ",
                                                                            "gallery"=>"\storage\shirts,men\shirt8.jpg"
                        ],
                        [
                            'name'=>'Roadster',
                            "price"=>"899",
                            "description"=>"Teal Green solid casual shirt, has a mandarin collar, long sleeves, button placket, curved hem, and 1 patch pocket                                                                            ",
                            "category"=>"shirts",
                            "gender"=>"male",
                            "productname"=>"Men Teal Green Regular Fit Solid Casual Shirt                                                                       ",
                            "gallery"=>"\storage\shirts,men\shirt9.jpg"
],
            [
                'name'=>'Mast & Harbour',
                "price"=>"1499",
                "description"=>"Blue solid casual shirt, has a button-down collar, long sleeves, button placket, curved hem, and 1 patch pocket

                ",
                "category"=>"shirts",
                "gender"=>"male",
                "productname"=>"Men Blue Regular Fit Solid Casual Linen Shirt
                ",
                "gallery"=>"\storage\shirts,men\shirt10.jpg"             ]
        ]);
    }
}
