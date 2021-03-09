<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(            
            array('image' => 'img/18.jpg','draft' => 0),     
            array('image' => 'img/19.jpg','draft' => 0),            
            array('image' => 'img/20.jpg','draft' => 0),            
            array('image' => 'img/21.jpg','draft' => 0),            
            array('image' => 'img/22.jpg','draft' => 0),       
            array('image' => 'img/23.jpg','draft' => 0),               
            array('image' => 'img/24.jpg','draft' => 0),            
            array('image' => 'img/25.jpg','draft' => 0),            
            array('image' => 'img/26.jpg','draft' => 0),            
            array('image' => 'img/27.jpg','draft' => 0),            
            array('image' => 'img/28.jpg','draft' => 0),            
            array('image' => 'img/29.jpg','draft' => 0),      
    );            
        DB::table('profiles')->insert($data);
    
    }
}
