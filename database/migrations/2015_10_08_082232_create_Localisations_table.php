<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('localisations', function(Blueprint $table) {
    		$table->increments('idLocalisation');
    		$table->string('adresse', 300);
    		$table->string('ville', 100);
    		$table->string('departement', 100);
    		$table->string('region', 100);
    	});
    }
    
    
    
    
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('localisations');
    }
}
