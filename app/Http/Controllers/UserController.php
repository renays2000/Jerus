<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller {
	protected $userRepository;
	protected $nbrPerPage = 4;
	public function __construct(UserRepository $userRepository) {
		$this->middleware ( 'auth', [
				'except' => 'index'
		] );
		$this->middleware ( 'admin', [
				'only' => 'destroy'
		] );
		$this->userRepository = $userRepository;
	}
	public function index() {
		$users = $this->userRepository->getPaginate ( $this->nbrPerPage );
		$links = $users->setPath ( '' )->render ();
		
		return view ( 'users.index', compact ( 'users', 'links' ) );
	}
	public function create() {
		return view ( 'users.create' );
	}
	public function store(UserCreateRequest $request) {
		$this->setAdmin ( $request );
		
		$user = $this->userRepository->store ( $request->all () );
		
		return redirect ( 'user' )->withOk ( "L'utilisateur " . $user->nom . " a été créé." );
	}
	public function show($id) {
		$user = $this->userRepository->getById ( $id );
		
		return view ( 'users.show', compact ( 'user' ) );
	}
	public function edit($id) {
		$user = $this->userRepository->getById ( $id );
		
		return view ( 'users.edit', compact ( 'user' ) );
	}
	public function update(UserUpdateRequest $request, $id) {
		$this->setAdmin ( $request );
		
		$this->userRepository->update ( $id, $request->all () );
		
		return redirect ( 'user' )->withOk ( "L'utilisateur " . $request->input ( 'nom' ) . " a été modifié." );
	}
	public function destroy($id) {
		$this->userRepository->destroy ( $id );
		
		return redirect ()->back ();
	}
	private function setAdmin($request) {
		if (! $request->has ( 'admin' )) {
			$request->merge ( [ 
					'admin' => 0 
			] );
		}
	}
}