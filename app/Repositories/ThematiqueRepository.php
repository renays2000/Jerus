<?php

namespace App\Repositories;

use App\Models\Thematique;

class ThematiqueRepository {
	protected $thematique;
	public function __construct(Thematique $thematique) {
		$this->thematique = $thematique;
	}
	public function getPaginate($n) {
		return $this->thematique->orderBy ( 'thematiques.id', 'asc' )->paginate ( $n );
	}
	public function store($inputs) {
		$this->thematique->create ( $inputs );
	}
	public function destroy($id) {
		$this->thematique->findOrFail ( $id )->delete ();
	}
}