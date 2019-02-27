<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInfoExternalLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_info_external_link', function (Blueprint $table) {
            $table->integer('external_link_id')->unsigned();
            $table->foreign('external_link_id')->references('id')->on('external_links');
            $table->integer('contact_info_id')->unsigned();
            $table->foreign('contact_info_id')->references('id')->on('contact_infos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_info_external_link');
    }
}
