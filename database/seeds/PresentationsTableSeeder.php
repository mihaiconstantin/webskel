<?php

use Illuminate\Database\Seeder;

class PresentationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presentations')->delete();

        DB::table('presentations')->insert(
        [
            [
                'context' => 'home.index',
                'summary' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
                'title' => 'Challenges to the network perspective',
                'conference' => 'Association for Psychological Science',
                'city' => 'Chicago',
                'year' => '2017',
                'link' => 'praesent-tristique-gravida',
                'image' => 'presentation1.jpg',
                'order' => '1'
            ],
            [
                'context' => 'home.index',
                'summary' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
                'title' => 'Challenges to the network perspective',
                'conference' => 'Association for Psychological Science',
                'city' => 'Chicago',
                'year' => '2017',
                'link' => 'praesent-tristique-gravida',
                'image' => 'presentation1.jpg',
                'order' => '2'
            ],
            [
                'context' => 'home.index',
                'summary' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
                'title' => 'Challenges to the network perspective',
                'conference' => 'Association for Psychological Science',
                'city' => 'Chicago',
                'year' => '2017',
                'link' => 'praesent-tristique-gravida',
                'image' => 'presentation1.jpg',
                'order' => '3'
            ]
        ]);
    }
}
