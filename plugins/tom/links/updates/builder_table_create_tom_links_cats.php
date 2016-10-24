<?php namespace Tom\Links\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTomLinksCats extends Migration
{
    public function up()
    {
        Schema::create('tom_links_cats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cat', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tom_links_cats');
    }
}
