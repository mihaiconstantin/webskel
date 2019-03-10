<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->delete();

        DB::table('configs')->insert([
            [
                'context' => 'all',
                'key' => 'title',
                'value' => 'Website Title'
            ],
            [
                'context' => 'all',
                'key' => 'copyright',
                'value' => 'Firstname Lastname'
            ],
            [
                'context' => 'all',
                'key' => 'logo',
                'value' => 'https://experiencesampling.nl/storage/settings/February2018/mjkie6fZZnjmaHCagCt9.png'
            ],
            [
                'context' => 'all',
                'key' => 'socialIcon',
                'value' => 'img/twitter.png'
            ],
            [
                'context' => 'all',
                'key' => 'socialLink',
                'value' => 'https://twitter.com/intent/tweet?text=Check%20out&via=mihaiac'
            ],
            [
                'context' => 'all',
                'key' => 'username',
                'value' => 'MihaiAC'
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
