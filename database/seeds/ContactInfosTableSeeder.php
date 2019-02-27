<?php

use Illuminate\Database\Seeder;

class ContactInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_infos')->delete();

        DB::table('contact_infos')->insert(
        [
          [
            'context' => 'home.index',
            'prefix' => 'dr.',
            'name' => 'Angélique Cramer',
            'position' => 'Associate Professor',
            'company' => 'Tilburg University',
            'department' => 'Methodology and Statistics',
            'email' => 'aoj.cramer@gmail.com'
          ]  
        ]);
    }
}
