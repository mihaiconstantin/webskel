<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->delete();

        DB::table('carousels')->insert(
        [
            [
                'context' => 'home.index',
                'title' => 'Lorem ipsum dolor sit',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, cumque? Est totam, dolor inventore porro id hic mollitia suscipit neque similique praesentium quo dicta fuga perferendis optio culpa veritatis beatae. Iure impedit praesentium fuga quas, incidunt laboriosam maiores, distinctio quae dolore, blanditiis autem? Magni optio quo aspernatur, maiores molestiae autem!',
                'avatar' => 'img/avatar.png',

                'image_display' => 1,
                'image' => 'http://clipart-library.com/images/kTMKBG7Ec.jpg',
                
                'overlay_display' => 1,
                'overlay_color' => '#005684',
                'overlay_opacity' => .5,

                'network_display' => 1,
                'node_color' => '#7ab1e6',
                'edge_color' => '#f8fafc',
                'node_opacity' => .5,
                'edge_opacity' => .4,
                
                'background_color' => '#1A2233'
            ]
        ]);
    }
}
