<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('commentaires', function(Blueprint $table) {
    		$table->increments('id');
    		$table->text('contenu');
    		$table->boolean('moderation')->default ( false );
    		$table->boolean('publie')->default ( false );
    		$table->timestamps ();
        	$table->integer ( 'idPost' )->unsigned ();
        	$table->foreign('idPost')->references('id')->on('posts')
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
		Schema::table('commentaires', function(Blueprint $table) {
			$table->dropForeign('commentaires_idPost_foreign');
		});		

		Schema::drop('commentaires');
	}
}
