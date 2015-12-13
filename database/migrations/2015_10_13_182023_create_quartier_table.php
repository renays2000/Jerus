<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuartierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quartiers', function(Blueprint $table) {
    		$table->increments('id');
    		$table->string('nom', 300);
        	$table->integer ( 'idVille' )->unsigned ();
        	$table->foreign('idVille')->references('id')->on('villes')
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
		Schema::table('quartiers', function(Blueprint $table) {
			$table->dropForeign('quartiers_idville_foreign');
		});		

		Schema::drop('quartiers');
	}
}
