<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('images', function(Blueprint $table) {
    		$table->increments('id');
    		$table->string('url', 300);
    		$table->string('alt', 300);
        	$table->integer ( 'idAnnonce' )->unsigned ();
        	$table->foreign('idAnnonce')->references('id')->on('annonces')
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
		Schema::table('images', function(Blueprint $table) {
			$table->dropForeign('images_idAnnonce_foreign');
		});		

		Schema::drop('images');
	}
}
