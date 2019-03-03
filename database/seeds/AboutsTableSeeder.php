<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->delete();
        
        DB::table('abouts')->insert(
        [
            [
                'context' => 'home.index',
                'image' => 'network.png',
                'image_display' => '1',
                'image_position' => 'right',
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque velit at repudiandae atque hic, tenetur vel deserunt quisquam veniam, distinctio id, reprehenderit blanditiis accusantium aut perspiciatis cum voluptatibus unde iure nam maxime illo nemo? Aut possimus doloremque quidem reprehenderit? Excepturi laborum distinctio cum repudiandae expedita? Atque fugit debitis amet, possimus et officia quasi mollitia optio voluptatem esse, totam beatae eos perspiciatis iusto voluptatibus eligendi molestias deserunt sequi quia alias! Debitis, id quaerat quis inventore laborum quo saepe obcaecati maiores sed. Eveniet cum similique exercitationem commodi quidem. Deleniti eligendi odio eaque, asperiores aliquam quis quaerat explicabo debitis reiciendis voluptatibus vero facilis, nemo sint blanditiis rerum ipsa voluptas consectetur dolorum accusantium neque veniam error! A iusto dolorum, molestiae perspiciatis fuga adipisci pariatur quidem, placeat nihil, unde consectetur. Quisquam unde pariatur vitae libero sed quod aut esse, totam eos at modi possimus temporibus sunt! Quam, architecto minima, veniam aut et non voluptate ducimus debitis obcaecati dolorem ea, pariatur quis blanditiis accusantium culpa nihil aliquam sint cumque eaque a magni. Consectetur magni reprehenderit sunt repellat iste! Obcaecati fuga, maxime quod officia voluptatibus cum deserunt veritatis nostrum iste totam minus neque, repellendus, ex dicta libero aut perspiciatis debitis pariatur. Error soluta voluptatem cupiditate earum excepturi vero vel eaque hic quia illo veritatis consequuntur cum odit ratione quod, alias a corporis necessitatibus molestiae ducimus maiores aspernatur ab, quos id. Explicabo, pariatur laborum dolore, aperiam animi labore aliquid at a aut repudiandae, distinctio iure. Expedita harum dignissimos placeat natus praesentium, exercitationem totam, excepturi provident voluptas minus laboriosam! Quibusdam praesentium velit doloremque culpa consequuntur nobis dolores quos magni quae saepe vitae quia eveniet recusandae nostrum laboriosam perferendis molestiae rem eum iure necessitatibus, debitis quod perspiciatis repellendus! Voluptatibus quidem aut possimus? Earum temporibus eaque distinctio delectus quisquam necessitatibus inventore accusamus. Nihil minima vel quidem. Harum doloremque delectus saepe dolor.',
                'animation' => 'fade-right',
                'order' => '1'
            ]
        ]);   
    }
}
