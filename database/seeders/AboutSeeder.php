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
        DB::table('abouts')->insert([
            'image' => 'img/7.jpg',
            'title' => 'MORBI ACCUMSAN',          
            'description' => 'Morbi dapibus rhoncus nulla ac tempus. Integer felis lorem, fermentum quis nisl accumsan, gravida gravida est. Cras ultrices rhoncus dui ut laoreet. Fusce tincidunt, urna a imperdiet tempor, orci dolor dictum elit, sit amet malesuada mauris magna eget dolor.
                            Phasellus lobortis nisl ut tortor placerat, vel auctor felis semper. Quisque ut auctor sapien. Proin gravida arcu malesuada, venenatis nisl vitae, egestas sem. Vestibulum mauris magna, aliquam non commodo ac, porttitor a augue.',
            'draft' => 0
        ]);   
    }
}
