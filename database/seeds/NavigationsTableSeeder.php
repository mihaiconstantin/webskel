<?php

use Illuminate\Database\Seeder;

class NavigationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navigations')->delete();

        DB::table('navigations')->insert(
        [
            [
                'context' => 'home.index',
                'active_link' => 'About'
            ],
            [
                'context' => 'blog.index',
                'active_link' => 'Blog'
            ]
        ]);
    }
}
