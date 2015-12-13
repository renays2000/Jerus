<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TypeAnnonceTableSeeder extends Seeder {
	public function run() {
		DB::table ( 'typeAnnonces' )->delete ();
		DB::table ( 'typeAnnonces' )->insert ( [
				'libelle' => 'vente'
		] );
		DB::table ( 'typeAnnonces' )->insert ( [
				'libelle' => 'location'
		] );
		DB::table ( 'typeAnnonces' )->insert ( [
				'libelle' => 'offre'
		] );
	}
}