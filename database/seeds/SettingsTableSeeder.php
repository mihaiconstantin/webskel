<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        DB::table('settings')->insert([
            [
                'context' => 'all',
                'key' => 'title',
                'value' => 'Angelique Cramer'
            ],
            [
                'context' => 'all',
                'key' => 'logo',
                'value' => 'https://experiencesampling.nl/storage/settings/February2018/mjkie6fZZnjmaHCagCt9.png'
            ],
            [
                'context' => 'all',
                'key' => 'twitter',
                'value' => 'twitter.png'
            ],
            [
                'context' => 'all',
                'key' => 'linkProjects',
                'value' => '/blog/category/projects'
            ],
            [
                'context' => 'all',
                'key' => 'linkPublications',
                'value' => '/blog/category/publications'
            ],
            [
                'context' => 'all',
                'key' => 'linkPresentations',
                'value' => '/blog/category/presentations'
            ],
            [
                'context' => 'all',
                'key' => 'meta_description',
                'value' => 'Lorem impsum...'
            ],
            [
                'context' => 'all',
                'key' => 'meta_keywords',
                'value' => 'word1, word2, ...'
            ],
            [
                'context' => 'all',
                'key' => 'og_description',
                'value' => 'Lorem impsum...'
            ],
            [
                'context' => 'all',
                'key' => 'og_image',
                'value' => 'https://experiencesampling.nl/storage/settings/February2018/mjkie6fZZnjmaHCagCt9.png'
            ]
        ]);
    }
}
