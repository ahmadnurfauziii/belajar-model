<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HomeSeeder extends Seeder
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
            'title' => 'Heading 1',
            'description' => 'Sed tempor ante aliquam, finibus diam in, mattis enim. Aliquam neque odio, aliquam non ullamcorper nec, tempus non libero. Etiam in odio rutrum, euismod massa quis, ullamcorper diam. Mauris ac lectus mollis, mollis tortor vel, placerat elit. Quisque euismod ut neque in rutrum. Quisque vitae dignissim elit. Aliquam vel erat ante. Pellentesque luctus efficitur ultrices. Nam eget odio ultrices, laoreet arcu eu, vehicula ligula. Quisque non nisi finibus, consequat nulla vitae, accumsan lectus. Morbi vestibulum, massa a gravida commodo, enim nisi porttitor nulla, ut aliquam turpis urna non sem. Suspendisse id odio ac orci ornare fermentum. Sed tincidunt id odio vel interdum.',
            'draft' => 0,
           ],
           [
            'title' => 'Heading 2',
            'description' => 'Etiam mollis nisi ut eleifend condimentum. Morbi posuere convallis lacus, a venenatis risus mattis eget. Vestibulum vitae gravida augue, vitae molestie dui. Duis lobortis nisi eget consequat tincidunt. Sed vel tortor vitae nisl pharetra dignissim. Sed lorem neque, sagittis eget sem sit amet, aliquet fringilla tortor. Praesent et aliquet arcu. Nunc tempor vulputate sapien, ut varius risus blandit at.',
            'draft' => 0,
           ],
           [
            'title' => 'Heading 3',
            'description' => 'Phasellus lobortis nisl ut tortor placerat, vel auctor felis semper. Quisque ut auctor sapien. Proin gravida arcu malesuada, venenatis nisl vitae, egestas sem. Vestibulum mauris magna, aliquam non commodo ac, porttitor a augue. Cras laoreet est at magna malesuada, a viverra ipsum luctus. Nullam sed lacinia magna. Donec ullamcorper lectus et diam porttitor, a tincidunt diam iaculis. Donec sagittis posuere pellentesque.',
            'draft' => 0,
           ]
        ];
        
           DB::table('homes')->insert($data);  
    }
}
