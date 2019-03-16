<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Member;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');

            $table->string('context');

            $table->string('name');
            $table->string('email')->unique();
            $table->enum('gender', Member::$genders)->default(Member::$genders[0]);

            $table->text('description');
            $table->string('link');
            $table->string('image');
            
            $table->enum('role', Member::$roles)->default(Member::$roles[0]);
            
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
        Schema::dropIfExists('members');
    }
}
