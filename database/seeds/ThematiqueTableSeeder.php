<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ThematiqueTableSeeder extends Seeder {
	public function run() {
		DB::table ( 'thematiques' )->delete ();
		DB::table ( 'thematiques' )->insert ( [
				'libelle' => 'immobilier'
				] );
		DB::table ( 'thematiques' )->insert ( [
				'libelle' => 'automobile'
		] );
		DB::table ( 'thematiques' )->insert ( [
				'libelle' => 'bonnes-affaires'
		] );
		DB::table ( 'thematiques' )->insert ( [
				'libelle' => 'multimedias'
		] );
		DB::table ( 'thematiques' )->insert ( [
				'libelle' => 'professionnels'
		] );
	}
}