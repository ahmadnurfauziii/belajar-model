<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'title' => 'Morbi',          
            'description' => 'Sed tempor ante aliquam, finibus diam in, mattis enim. Aliquam neque odio, aliquam non ullamcorper nec, tempus non libero. Etiam in odio rutrum, euismod massa quis, ullamcorper diam. Mauris ac lectus mollis, mollis tortor vel, placerat elit. Quisque euismod ut neque in rutrum. Quisque vitae dignissim elit. Aliquam vel erat ante. Pellentesque luctus efficitur ultrices. Nam eget odio ultrices, laoreet arcu eu, vehicula ligula. Quisque non nisi finibus, consequat nulla vitae, accumsan lectus. Morbi vestibulum, massa a gravida commodo, enim nisi porttitor nulla, ut aliquam turpis urna non sem. Suspendisse id odio ac orci ornare fermentum. Sed tincidunt id odio vel interdum.',
            'draft' => 0
        ]);   
    }
}
