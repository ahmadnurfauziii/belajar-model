<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WhoSeeder extends Seeder
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
                'image' => 'img/11.png',
                'title' => 'LOREM QUIS',
                'description' => 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor nisi elit consequat.',
                'draft' => 0,
                ],
            [    
                'image' => 'img/12.png',
                'title' => 'PROIN GRAVID',
                'description' => 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor nisi elit consequat.',
                 'draft' => 0, 
            ],
            [
                'image' => 'img/13.png',
                'title' => 'CONSEQUAT',
                'description' => 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor nisi elit consequat.',
                'draft' => 0, 
            ]
            ];    
        

        DB::table('whos')->insert($data);    
    }
}
