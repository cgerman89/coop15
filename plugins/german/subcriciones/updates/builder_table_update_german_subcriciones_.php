<?php namespace German\Subcriciones\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGermanSubcriciones extends Migration
{
    public function up()
    {
        Schema::table('german_subcriciones_', function($table)
        {
            $table->dateTime('create_at');
            $table->dateTime('update_at');
        });
    }
    
    public function down()
    {
        Schema::table('german_subcriciones_', function($table)
        {
            $table->dropColumn('create_at');
            $table->dropColumn('update_at');
        });
    }
}
