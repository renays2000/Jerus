<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	protected $fillable = [ 
			'titre',
			'contenu',
			'actif',
			'rang',
			'user_id' 
	];
	public $timestamps = true;
	public function user() {
		return $this->belongsTo ( 'App\User' );
	}
}