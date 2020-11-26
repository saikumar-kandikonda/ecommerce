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
                'name'=>'Oppo mobile',
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gender"=>"male",
                "productname"=>"shoes with something",
                "gallery"=>"\storage\shirts,men\shirt1.jpg"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gender"=>"male",
                "productname"=>"shoes with something",
                "gallery"=>"\storage\shirts,men\shirt1.jpg"
                        ],
            [
                'name'=>'Soni Tv',
                "price"=>"500",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gender"=>"male",
                "productname"=>"shoes with something",
                "gallery"=>"\storage\shirts,men\shirt1.jpg"
                        ],
            [
                'name'=>'LG fridge',
                "price"=>"200",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gender"=>"male",
                "productname"=>"shoes with something",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
             ]
        ]);
    }
}
