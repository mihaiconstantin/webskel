<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $this->call(ConfigsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(PublicationsTableSeeder::class);
        $this->call(PresentationsTableSeeder::class);
        $this->call(NavigationsTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(LinkNavigationTableSeeder::class);
        $this->call(ContactInfosTableSeeder::class);
        $this->call(ExternalLinksTableSeeder::class);
        $this->call(ContactInfoExternalLinkTableSeeder::class);
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
