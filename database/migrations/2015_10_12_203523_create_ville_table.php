<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVilleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('villes', function(Blueprint $table) {
    		$table->increments('id');
    		$table->string('nom', 300);
        	$table->integer ( 'idRegion' )->unsigned ();
        	$table->foreign('idRegion')->references('id')->on('regions')
        	->onDelete('restrict')
        	->onUpdate('restrict');
			} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('villes', function(Blueprint $table) {
			$table->dropForeign('villes_idRegion_foreign');
		});		

		Schema::drop('villes');
	}
}
