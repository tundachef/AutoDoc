<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SellerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->insert([
            'f_name' => 'Kasujja',
            'l_name' => 'Muhammed',
            'phone' => '0774262923',
            'email' => 'seller@seller.com',
            'image' => 'def.png',
            'password' => bcrypt(12345678),
            'status'=>'pending',
            'remember_token' =>Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
