<?php namespace Tom\Links\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTomLinksItems extends Migration
{
    public function up()
    {
        Schema::create('tom_links_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('cat_id')->nullable();
            $table->string('img', 255)->nullable();
            $table->string('url', 255)->nullable();
            $table->string('text', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tom_links_items');
    }
}
