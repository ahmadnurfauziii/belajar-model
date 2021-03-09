<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
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
                'image' => 'img/8.jpg',
                'title' => 'Feufelisda',          
                'description' => 'Nullam Acurna',
                'draft' => 0,
                ],
            [    
                'image' => 'img/9.jpg',
                'title' => 'Feufelisda',          
                'description' => 'Nullam Acurna',
                'draft' => 0, 
            ],
            [
            'image' => 'img/10.jpg',
                'title' => 'Feufelisda',          
                'description' => 'Nullam Acurna',
                'draft' => 0,  
            ]
            ];
            DB::table('abouts')->insert($data);
    }
}
