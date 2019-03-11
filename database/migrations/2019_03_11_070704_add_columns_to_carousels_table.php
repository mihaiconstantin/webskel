<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->boolean('image_display')->default(0);
            $table->boolean('overlay_display')->default(0);
            $table->boolean('network_display')->default(0);
            
            $table->string('image')->nullable();
            $table->string('overlay_color')->nullable();
            $table->double('overlay_opacity')->nullable();
            $table->string('node_color')->nullable();
            $table->string('edge_color')->nullable();
            $table->double('node_opacity')->nullable();
            $table->double('edge_opacity')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->dropColumn('image_display');
            $table->dropColumn('overlay_display');
            $table->dropColumn('network_display');
            
            $table->dropColumn('image');
            $table->dropColumn('overlay_color');
            $table->dropColumn('overlay_opacity');
            $table->dropColumn('node_color');
            $table->dropColumn('edge_color');
            $table->dropColumn('node_opacity');
            $table->dropColumn('edge_opacity');
        });
    }
}
