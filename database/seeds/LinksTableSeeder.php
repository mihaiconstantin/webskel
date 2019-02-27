<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->delete();

        DB::table('links')->insert(
        [
            [
                'text' => 'About',
                'anchor' => '#app-about'
            ],
            [
                'text' => 'Projects',
                'anchor' => '#app-projects'
            ],
            [
                'text' => 'Publications',
                'anchor' => '#app-publications'
            ],
            [
                'text' => 'Presentations',
                'anchor' => '#app-presentations'
            ],
            [
                'text' => 'Contact',
                'anchor' => '#app-contact'
            ],
            [
                'text' => 'Blog',
                'anchor' => '/blog'
            ],
			[
                'text' => 'Home',
                'anchor' => '/home'
            ]
        ]);
    }
}
