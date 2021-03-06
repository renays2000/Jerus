<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
    	Schema::create('typeAnnonces', function(Blueprint $table) {
    		$table->increments('id');
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
    	Schema::drop('typeAnnonces');
    }
}
