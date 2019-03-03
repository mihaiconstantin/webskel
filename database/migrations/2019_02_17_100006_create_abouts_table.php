<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\About;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('context');
            
            $table->text('content');
            $table->string('image')->nullable();
            $table->enum('image_position', About::$imagePositions)->nullable();
            $table->boolean('image_display')->default(0);
            
            $table->enum('animation', About::$animations)->default('off');
            
            $table->tinyInteger('order');
            $table->boolean('show')->default(1);

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
        Schema::dropIfExists('abouts');
    }
}
