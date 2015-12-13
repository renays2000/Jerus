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
			$table->increments ( 'id' );
			$table->timestamps ();
			$table->string ( 'titre', 80 );
			$table->text ( 'description' );
			$table->integer ( 'prix' );
			$table->boolean ( 'actif' )->default ( true );
			$table->integer ( 'idUser' )->unsigned ();
			$table->integer ( 'idAdresse' )->unsigned ();
			$table->integer ( 'idTypeAnnonce' )->unsigned ();
			$table->integer ( 'idCategorie' )->unsigned ();
			$table->integer ( 'idNotation' )->unsigned ();
			
			$table->foreign('idUser')->references('id')->on('users')
			->onDelete('restrict')
			->onUpdate('restrict');
			$table->foreign('idAdresse')->references('id')->on('adresses')
			->onDelete('restrict')
			->onUpdate('restrict');
			$table->foreign('idTypeAnnonce')->references('id')->on('typeAnnonces')
			->onDelete('restrict')
			->onUpdate('restrict');
			$table->foreign('idCategorie')->references('id')->on('categories')
			->onDelete('restrict')
			->onUpdate('restrict');
			$table->foreign('idNotation')->references('id')->on('notations')
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
    	Schema::table ( 'annonces', function (Blueprint $table) {
    		$table->dropForeign ( 'annonces_idUser_foreign' );
    		$table->dropForeign ( 'annonces_idAdresse_foreign' );
    		$table->dropForeign ( 'annonces_idTypeAnnonce_foreign' );
    		$table->dropForeign ( 'annonces_idCategorie_foreign' );
    		$table->dropForeign ( 'annonces_idNotation_foreign' );
    	} );
    	Schema::drop('annonces');
    }
}
