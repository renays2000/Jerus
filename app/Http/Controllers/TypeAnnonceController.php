<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TypeAnnonceRepository;
use App\Http\Requests\TypeAnnonceRequest;
use App\Http\Controllers\Controller;

class TypeAnnonceController extends Controller
{
    protected $typeAnnonceRepository;
	protected $nbrPerPage = 4;
	public function __construct(TypeAnnonceRepository $typeAnnonceRepository) {
		
		$this->typeAnnonceRepository = $typeAnnonceRepository;
	}
	public function index() {
		$typeAnnonces = $this->typeAnnonceRepository->getPaginate ( $this->nbrPerPage );
		$links = $typeAnnonces->setPath ( '' )->render ();
		
		return view ( 'back.typeAnnonce.liste', compact ( 'typeAnnonces', 'links' ) );
	}
	public function create() {
		return view ( 'back.typeAnnonce.add' );
	}
	public function store(TypeAnnonceRequest $request) {
		
		$this->typeAnnonceRepository->store ( $request->all () );
		
		return redirect ( route ( 'typeAnnonce.index' ) );
	}
	public function destroy($id) {
		$this->typeAnnonceRepository->destroy ( $id );
		
		return redirect ()->back ();
	}
}