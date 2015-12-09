<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder {
	public function run() {
		DB::table ( 'users' )->delete ();
		DB::table ( 'users' )->insert ( [
				'nom' => 'Barou',
				'prenom'=> 'rené',
				'pseudo'=> 'renays',
				'email' => 'barou2000@hotmail.com',
				'password' => bcrypt ( 'renays' ),
				'admin' => 1,
				'telephone'=> '0681331615'
		] );
// 		for($i = 0; $i < 10; ++ $i) {
// 			DB::table ( 'users' )->insert ( [ 
// 					'nom' => 'Nom' . $i,
// 					'email' => 'email' . $i . '@blop.fr',
// 					'password' => bcrypt ( 'password' . $i ),
// 					'admin' => rand ( 0, 1 ) 
// 			] );
// 		}
	}
}