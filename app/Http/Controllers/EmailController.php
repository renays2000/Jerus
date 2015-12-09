<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Repositories\EmailRepositoryInterface;

class EmailController extends Controller
{

    public function getForm()
	{
		return view('emails.email');
	}

	public function postForm(
		EmailRequest $request,
		EmailRepositoryInterface $emailRepository)
	{
		$emailRepository->save($request->input('email'));
		
		return view('emails.email_ok');
	}

}