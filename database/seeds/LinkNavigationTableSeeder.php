<?php

use Illuminate\Database\Seeder;

class LinkNavigationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('link_navigation')->delete();

        DB::table('link_navigation')->insert(
        [
            [ 'navigation_id' => 1, 'link_id' => 1 ],
            [ 'navigation_id' => 1, 'link_id' => 2 ],
            [ 'navigation_id' => 1, 'link_id' => 3 ],
            [ 'navigation_id' => 1, 'link_id' => 4 ],
            [ 'navigation_id' => 1, 'link_id' => 5 ],
            [ 'navigation_id' => 1, 'link_id' => 6 ],
            [ 'navigation_id' => 2, 'link_id' => 7 ],
            [ 'navigation_id' => 2, 'link_id' => 6 ]
        ]);
    }
}
