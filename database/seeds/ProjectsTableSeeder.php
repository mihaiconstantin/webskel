<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();

        DB::table('projects')->insert(
        [
            [
                'context' => 'home.index',
                'title' => 'Project 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati totam in itaque, suscipit aperiam sit voluptatum dolore quos at et! Maiores eius ducimus nisi cumque aspernatur praesentium voluptates in accusamus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium ad quaerat totam. Tempora nihil quisquam sed nobis rerum suscipit soluta, quo fugiat corrupti dignissimos! At, ut. Dolor, accusantium recusandae? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi veritatis illo quidem sapiente maxime animi mollitia iure, iste officia! Commodi, facere sint? Corporis officia quod debitis dolorem necessitatibus. Debitis, nisi.',
                'link' => 'praesent-tristique-gravida',
                'grant' => 'VENI',
                'duration' => '2015 - 2017',
                'featured' => '1',
                'order' => '1'
            ],
            [
                'context' => 'home.index',
                'title' => 'Project 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati totam in itaque, suscipit aperiam sit voluptatum dolore quos at et! Maiores eius ducimus nisi cumque aspernatur praesentium voluptates in accusamus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium ad quaerat totam. Tempora nihil quisquam sed nobis rerum suscipit soluta, quo fugiat corrupti dignissimos! At, ut. Dolor, accusantium recusandae? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi veritatis illo quidem sapiente maxime animi mollitia iure, iste officia! Commodi, facere sint? Corporis officia quod debitis dolorem necessitatibus. Debitis, nisi.',
                'link' => 'praesent-tristique-gravida-ligula',
                'grant' => 'ERC',
                'duration' => '2015 - 2017',
                'featured' => '1',
                'order' => '2'
            ],
            [
                'context' => 'home.index',
                'title' => 'Project 3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati totam in itaque, suscipit aperiam sit voluptatum dolore quos at et! Maiores eius ducimus nisi cumque aspernatur praesentium voluptates in accusamus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium ad quaerat totam. Tempora nihil quisquam sed nobis rerum suscipit soluta, quo fugiat corrupti dignissimos! At, ut. Dolor, accusantium recusandae? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi veritatis illo quidem sapiente maxime animi mollitia iure, iste officia! Commodi, facere sint? Corporis officia quod debitis dolorem necessitatibus. Debitis, nisi.',
                'link' => 'praesent-tristique-gravida-ligula',
                'grant' => 'ERC',
                'duration' => '2015 - 2017',
                'featured' => '0',
                'order' => '3'
            ],
            [
                'context' => 'home.index',
                'title' => 'Project 4',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati totam in itaque, suscipit aperiam sit voluptatum dolore quos at et! Maiores eius ducimus nisi cumque aspernatur praesentium voluptates in accusamus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium ad quaerat totam. Tempora nihil quisquam sed nobis rerum suscipit soluta, quo fugiat corrupti dignissimos! At, ut. Dolor, accusantium recusandae? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi veritatis illo quidem sapiente maxime animi mollitia iure, iste officia! Commodi, facere sint? Corporis officia quod debitis dolorem necessitatibus. Debitis, nisi.',
                'link' => 'praesent-tristique-gravida-ligula',
                'grant' => 'ERC',
                'duration' => '2015 - 2017',
                'featured' => '0',
                'order' => '4'
            ],
            [
                'context' => 'home.index',
                'title' => 'Project 5',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati totam in itaque, suscipit aperiam sit voluptatum dolore quos at et! Maiores eius ducimus nisi cumque aspernatur praesentium voluptates in accusamus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium ad quaerat totam. Tempora nihil quisquam sed nobis rerum suscipit soluta, quo fugiat corrupti dignissimos! At, ut. Dolor, accusantium recusandae? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi veritatis illo quidem sapiente maxime animi mollitia iure, iste officia! Commodi, facere sint? Corporis officia quod debitis dolorem necessitatibus. Debitis, nisi.',
                'link' => 'praesent-tristique-gravida-ligula',
                'grant' => 'ERC',
                'duration' => '2015 - 2017',
                'featured' => '0',
                'order' => '5'
            ]
        ]);
    }
}

