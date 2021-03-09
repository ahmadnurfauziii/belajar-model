<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'image' => 'img/1.jpg',
                'draft' => 0
            ],
            [
                'image' => 'img/2.jpg',
                'draft' => 0
            ],
            [
                'image' => 'img/3.jpg',
                'draft' => 0
            ]
            ];
            DB::table('pictures')->insert($data);  
    }
}
