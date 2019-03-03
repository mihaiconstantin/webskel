<?php

use Illuminate\Database\Seeder;

class ExternalLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('external_links')->delete();

        DB::table('external_links')->insert(
        [
            [
                'text' => 'Tilburg Experience Sampling Center',
                'anchor' => 'https://experiencesampling.nl'
            ],
            [
                'text' => 'Research Portal',
                'anchor' => 'https://google.com'
            ],
            [
                'text' => 'Another Link',
                'anchor' => 'https://google.com'
            ]
        ]);
    }
}
