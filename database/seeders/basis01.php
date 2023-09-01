<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class basis01 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
        DB::table('posts')->insert([
                'title' => '101',
                'body' => '101号室です',
                'price' => '50000', 
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    } //
    
}
