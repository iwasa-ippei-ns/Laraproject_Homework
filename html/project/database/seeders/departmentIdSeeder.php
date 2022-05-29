<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\departmentId;

class departmentIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('department_ids')->insert([
            'department_id' =>  1,
            'department_name' => '開発部',
            'address' => 'aaaaaaa',
            'others' => 'その他',
            'cloum_1' => 'カラム1',
            'cloum_2' => 'カラム2',
        ]);
        DB::table('department_ids')->insert([
            'department_id' =>  2,
            'department_name' => '営業部',
            'address' => 'aaaaaaa',
            'others' => 'その他',
            'cloum_1' => 'カラム1',
            'cloum_2' => 'カラム2',
        ]);
        DB::table('department_ids')->insert([
            'department_id' =>  3,
            'department_name' => '製造部',
            'address' => 'aaaaaaa',
            'others' => 'その他',
            'cloum_1' => 'カラム1',
            'cloum_2' => 'カラム2',
        ]);
        DB::table('department_ids')->insert([
            'department_id' =>  4,
            'department_name' => '経理部',
            'address' => 'aaaaaaa',
            'others' => 'その他',
            'cloum_1' => 'カラム1',
            'cloum_2' => 'カラム2',
        ]);
        DB::table('department_ids')->insert([
            'department_id' =>  5,
            'department_name' => '教育課',
            'address' => 'aaaaaaa',
            'others' => 'その他',
            'cloum_1' => 'カラム1',
            'cloum_2' => 'カラム2',
        ]);
    }
}
