<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AnnonceTableSeeder extends Seeder {
	private function randDate() {
		return Carbon::createFromDate ( null, rand ( 1, 12 ), rand ( 1, 28 ) );
	}
	public function run() {
		DB::table ( 'annonces' )->delete ();
		
		for($i = 0; $i < 10; ++ $i) {
			$date = $this->randDate ();
			DB::table ( 'annonces' )->insert ( [ 
					'titre' => 'Titre' . $i,
					'description' => 'description' . $i . ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
					'prix' => rand ( 110, 551 ),
					'actif' => rand ( 0, 1 ),
					'user_id' => '1',
					'idAdresse' => $i,
					'idTypeAnnonce' => '1',
					'idCategorie' => rand ( 0, 9 ),
					'idNotation' => rand ( 0, 10 ),
					'created_at' => $date,
					'updated_at' => $date 
			] );
		}
	}
}