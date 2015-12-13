<?php

namespace App\Repositories;

use App\Models\Categorie;

class CategorieRepository {
	protected $categorie;
	public function __construct(Categorie $categorie) {
		$this->categorie = $categorie;
	}
	public function getPaginate($n) {
		return $this->categorie->orderBy ( 'categories.id', 'asc' )->paginate ( $n );
	}
	public function store($inputs) {
		$this->categorie->create ( $inputs );
	}
	public function destroy($id) {
		$this->categorie->findOrFail ( $id )->delete ();
	}
}