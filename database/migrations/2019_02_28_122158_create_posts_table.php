<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Post;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('user_id');
            $table->smallInteger('category_id');

            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('status', Post::$statuses)->default(Post::$statuses[0]);

            $table->text('excerpt');
            $table->text('body');
            $table->string('image');

            $table->string('seo_title');
            $table->string('meta_description');
            $table->string('meta_keywords');
            
            $table->boolean('featured')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
