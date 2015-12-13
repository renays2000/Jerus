<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create ( 'categories', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->string ( 'libelle', 80 );
			$table->integer ( 'idThematique' )->unsigned ();
			$table->foreign('idThematique')->references('id')->on('thematiques')
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
		Schema::table('categories', function(Blueprint $table) {
			$table->dropForeign('categories_idThematique_foreign');
		});		

		Schema::drop('categories');
	}
}
