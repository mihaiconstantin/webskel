<?php

use Faker\Generator as Faker;
use App\Models\Post;


$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' 		    => $faker->numberBetween(1, 1),
        'category_id' 		=> $faker->numberBetween(1, 4),
        'title' 			=> $faker->sentence(5),
        'status'            => $faker->randomElement(Post::$statuses),
        'slug' 				=> $faker->slug,
        'excerpt' 			=> $faker->paragraph(5),
        'body' 				=> '<p style="box-sizing: border-box; outline: 0px; margin: 0px 0px 15px; padding: 0px; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus diam at libero egestas varius. Quisque metus odio, porttitor eget tincidunt ac, aliquam ut mi. Suspendisse purus massa, egestas ut leo vitae, euismod tempor felis. Duis quis rhoncus odio. Suspendisse eu ultrices quam. Etiam euismod urna nisi, id mollis mauris sagittis eget. Nam auctor, felis at vestibulum ultricies, nunc ligula viverra sapien, eget ultrices metus velit vitae urna. Suspendisse et quam scelerisque, mollis sem eget, venenatis sapien. Suspendisse bibendum pellentesque nisl, ac sollicitudin sem faucibus eu. Quisque sit amet dui ut lectus placerat molestie euismod vitae ex. Donec blandit sollicitudin mauris condimentum ultrices. Sed scelerisque in sapien eu vestibulum. Curabitur vulputate mi sed turpis eleifend semper.</p><h2 style="box-sizing: border-box; outline: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #000000; margin: 0px 0px 15px; font-size: 30px; text-shadow: rgba(0, 0, 0, 0.15) 0px 0px 1px; padding: 0px; text-align: left;">First Heading to Start With</h2><p style="box-sizing: border-box; outline: 0px; margin: 0px 0px 15px; padding: 0px; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: left;">Integer ex felis, sodales in risus in, suscipit elementum leo. Praesent malesuada elit eu leo laoreet bibendum. Etiam a sem auctor arcu vehicula accumsan. Nullam ut tincidunt metus. Aliquam ut eros placerat, pretium velit ac, suscipit nulla. Curabitur ac eleifend nulla, a consectetur enim. Etiam vulputate velit eu augue aliquam dictum. In condimentum urna vitae lorem ullamcorper, vel sagittis quam mattis. Maecenas mollis nisl et lectus venenatis eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p style="box-sizing: border-box; outline: 0px; margin: 0px 0px 15px; padding: 0px; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: left;">Vivamus in nisl purus. Suspendisse velit arcu, convallis ac auctor sit amet, volutpat at massa. Morbi sollicitudin dui eu lorem imperdiet, in rutrum sem vulputate. Etiam in arcu lorem. Maecenas pellentesque blandit auctor. Cras consectetur, leo egestas tincidunt facilisis, nulla lorem tincidunt ligula, ut tincidunt ante augue sed dolor. Aenean volutpat risus metus, id congue lorem condimentum vitae. Nulla imperdiet dui vitae urna egestas sodales. Suspendisse et sagittis dui. Vivamus a tortor ut felis interdum volutpat euismod malesuada lacus. Suspendisse congue, turpis eu auctor egestas, ipsum tortor ultricies dui, id suscipit turpis turpis sed libero.</p><p style="box-sizing: border-box; outline: 0px; margin: 0px 0px 15px; padding: 0px; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: left;">Mauris ipsum nulla, vestibulum et tincidunt euismod, lobortis a nibh. Curabitur posuere magna et justo faucibus volutpat. Nulla augue arcu, facilisis sollicitudin neque sit amet, condimentum ultricies massa. Nunc ut consectetur erat, at auctor eros. Etiam quis est lectus. Nunc ultrices mauris sed blandit pellentesque. Curabitur dapibus metus at risus pretium, tristique sollicitudin est bibendum. Fusce auctor iaculis ipsum at porta. Sed venenatis in nunc eget condimentum. Duis quis mollis est, sed tristique mi. Praesent tristique gravida ligula. Phasellus vulputate velit vitae aliquam convallis. Sed at metus ac tortor tempus dapibus et a orci.</p><h2 style="box-sizing: border-box; outline: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #000000; margin: 0px 0px 15px; font-size: 30px; text-shadow: rgba(0, 0, 0, 0.15) 0px 0px 1px; padding: 0px; text-align: left;">Conclusion</h2><p style="box-sizing: border-box; outline: 0px; margin: 0px 0px 15px; padding: 0px; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: left;">Praesent nisi sapien, consectetur consequat dolor vitae, dapibus ultrices quam. Suspendisse dictum feugiat dolor, et dapibus enim placerat sit amet. Vivamus vitae eros ac mi tincidunt lacinia vel vitae urna. Phasellus tincidunt dictum est, et efficitur enim congue id. Aliquam faucibus venenatis elit at ullamcorper. Phasellus congue condimentum dui vitae dignissim. Vivamus rhoncus tellus sem. Curabitur rutrum vulputate dui eget accumsan. Maecenas in interdum nisi. Nunc consectetur tristique commodo. Maecenas ut semper neque, et sagittis ligula. Sed at ipsum facilisis, ultrices enim non, posuere erat. Proin at laoreet tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hac habitasse platea dictumst. Vivamus ac est consectetur ex commodo cursus in sit amet tortor.</p>',
        'image' 			=> 'post.png',
        'meta_title' 		=> $faker->sentence(6),
        'meta_description' 	=> $faker->sentence(10),
        'meta_keywords' 	=> implode(',', $faker->words(5)),
        'featured' 			=> $faker->numberBetween(0, 1)
    ];
});