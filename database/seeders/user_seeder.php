<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;



class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $random = Str::random(5);
        DB::table('users')->insert([
            'name'=>$random,
            'email'=>$random."@".$random.".com",
            'password'=>Hash::make('123'),

        ]);
    }
}
