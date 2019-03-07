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
                'image' => 'img/avatar.png',
                'color' => '#1A2233'
            ]
        ]);
    }
}
