<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePostsTable extends Migration {
	public function up() {
		Schema::create ( 'posts', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->timestamps ();
			$table->string ( 'titre', 80 );
			$table->text ( 'contenu' );
			$table->boolean ( 'actif' )->default ( true );
			$table->integer ( 'rang' );
			$table->integer ( 'idUser' )->unsigned ();
			$table->foreign ( 'idUser' )->references ( 'id' )->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		} );
	}
	public function down() {
		Schema::table ( 'posts', function (Blueprint $table) {
			$table->dropForeign ( 'posts_idUser_foreign' );
		} );
		Schema::drop ( 'posts' );
	}
}