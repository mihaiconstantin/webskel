<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Publication;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('context');
            $table->string('title');
            $table->smallInteger('year');
            $table->text('abstract');
            $table->string('journal');
            $table->string('link');
            $table->enum('status', Publication::$publicationStatuses);
            $table->string('authors')->nullable()->default('n.a.');
            $table->boolean('featured')->default(0);
            $table->boolean('show')->default(1);
            $table->tinyInteger('order');

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
        Schema::dropIfExists('publications');
    }
}
