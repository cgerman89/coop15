<?php namespace German\Subcriciones\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGermanSubcriciones extends Migration
{
    public function up()
    {
        Schema::create('german_subcriciones_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('lastname', 100);
            $table->text('addres')->nullable();
            $table->string('mail', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('german_subcriciones_');
    }
}
