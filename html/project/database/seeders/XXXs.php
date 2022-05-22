<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\XXX;

class XXXs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('x_x_x_e_s')->insert([
            'test_clum' => 'リンゴ'
        ]);
        
        DB::table('x_x_x_e_s')->insert([
            'test_clum' => 'ゴリラ'
        ]);
        
        DB::table('x_x_x_e_s')->insert([
            'test_clum' => 'ラッパ'
        ]);
        
        DB::table('x_x_x_e_s')->insert([
            'test_clum' => 'パーティー'
        ]);
    }
}
