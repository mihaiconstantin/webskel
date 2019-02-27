<?php

use Illuminate\Database\Seeder;

class ContactInfoExternalLinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_info_external_link')->delete();

        DB::table('contact_info_external_link')->insert(
        [
            [ 'contact_info_id' => 1, 'external_link_id' => 1 ],
            [ 'contact_info_id' => 1, 'external_link_id' => 2 ],
            [ 'contact_info_id' => 1, 'external_link_id' => 3 ]
        ]);
    }
}
