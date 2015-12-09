<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThematiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
    	Schema::create('thematiques', function(Blueprint $table) {
    		$table->increments('idThematique');
    		$table->string('libelle', 100);
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('thematiques');
    }
}
