<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdresseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('adresses', function(Blueprint $table) {
    		$table->increments('id');
    		$table->string('libelle', 300);
    		$table->integer ( 'idQuartier' )->unsigned ();
    		$table->integer ( 'idVille' )->unsigned ();
        	$table->integer ( 'idRegion' )->unsigned ();
        	
        	$table->foreign('idQuartier')->references('id')->on('quartiers')
        	->onDelete('restrict')
        	->onUpdate('restrict');
        	$table->foreign('idVille')->references('id')->on('villes')
        	->onDelete('restrict')
        	->onUpdate('restrict');
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
		Schema::table('adresses', function(Blueprint $table) {
			$table->dropForeign('adresses_idQuartier_foreign');
			$table->dropForeign('adresses_idVille_foreign');
			$table->dropForeign('adresses_idRegion_foreign');
		});		

		Schema::drop('adresses');
	}
}
