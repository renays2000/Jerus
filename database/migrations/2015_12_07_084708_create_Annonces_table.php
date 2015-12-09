<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ( 'annonces', function (Blueprint $table) {
			$table->increments ( 'idAnnonce' );
			$table->timestamps ();
			$table->string ( 'titre', 80 );
			$table->text ( 'description' );
			$table->integer ( 'prix' );
			$table->boolean ( 'actif' )->default ( true );
			$table->integer ( 'rang' );
			$table->integer ( 'idUser' )->unsigned ();
			$table->integer ( 'idLocalisation' )->unsigned ();
			$table->integer ( 'idTypeAnnonce' )->unsigned ();
			$table->integer ( 'idCategorie' )->unsigned ();
		} );
        	
        	Schema::table('annonces', function(Blueprint $table) {
        		$table->foreign('idUser')->references('idUser')->on('users')
        		->onDelete('restrict')
        		->onUpdate('restrict');
        	});
        		Schema::table('annonces', function(Blueprint $table) {
        			$table->foreign('idLocalisation')->references('idLocalisation')->on('localisations')
        			->onDelete('restrict')
        			->onUpdate('restrict');
        		});
        			Schema::table('annonces', function(Blueprint $table) {
        				$table->foreign('idTypeAnnonce')->references('idTypeAnnonce')->on('typeAnnonces')
        				->onDelete('restrict')
        				->onUpdate('restrict');
        			});
        				Schema::table('annonces', function(Blueprint $table) {
        					$table->foreign('idCategorie')->references('idCategorie')->on('categories')
        					->onDelete('restrict')
        					->onUpdate('restrict');
        				});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table ( 'annonces', function (Blueprint $table) {
    		$table->dropForeign ( 'annonces_idUser_foreign' );
    		$table->dropForeign ( 'annonces_idLocalisation_foreign' );
    		$table->dropForeign ( 'annonces_idTypeAnnonce_foreign' );
    		$table->dropForeign ( 'annonces_idCategorie_foreign' );
    	} );
    	Schema::drop('annonces');
    }
}
