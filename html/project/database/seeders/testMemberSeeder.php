<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class testMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\testMember::factory()->count(10)->create();
    }
}
