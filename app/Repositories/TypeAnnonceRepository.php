<?php

namespace App\Repositories;

use App\Models\TypeAnnonce;

class TypeAnnonceRepository {
	protected $typeAnnonce;
	public function __construct(TypeAnnonce $typeAnnonce) {
		$this->typeAnnonce = $typeAnnonce;
	}
	public function getPaginate($n) {
		return $this->typeAnnonce->orderBy ( 'typeAnnonces.id', 'asc' )->paginate ( $n );
	}
	public function store($inputs) {
		$this->typeAnnonce->create ( $inputs );
	}
	public function destroy($id) {
		$this->typeAnnonce->findOrFail ( $id )->delete ();
	}
}