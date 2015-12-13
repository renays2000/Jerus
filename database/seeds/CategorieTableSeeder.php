<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategorieTableSeeder extends Seeder {
	public function run() {
		DB::table ( 'categories' )->delete ();
		DB::table ( 'categories' )->insert ( [
				'libelle' => 'villa',
				'idThematique' => '1'
		] );
		DB::table ( 'categories' )->insert ( [
				'libelle' => 'appartement',
				'idThematique' => '1'
		] );
		DB::table ( 'categories' )->insert ( [
				'libelle' => 'terrain',
				'idThematique' => '1'
		] );
		DB::table ( 'categories' )->insert ( [
				'libelle' => 'immeuble',
				'idThematique' => '1'
		] );
		DB::table ( 'categories' )->insert ( [
				'libelle' => 'bureaux-commerce',
				'idThematique' => '1'
		] );
		DB::table ( 'categories' )->insert ( [
				'libelle' => 'bureaux-commerce',
				'idThematique' => '1'
		] );
		DB::table ( 'categories' )->insert ( [
				'libelle' => 'villa-appart-meubles',
				'idThematique' => '1'
		] );
		DB::table ( 'categories' )->insert ( [
				'libelle' => 'location-vacances',
				'idThematique' => '1'
		] );
		DB::table ( 'categories' )->insert ( [
				'libelle' => 'autres',
				'idThematique' => '1'
		] );
		
	}
}