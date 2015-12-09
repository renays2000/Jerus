<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';
	
	protected $fillable = [ 
			'titre',
			'contenu',
			'actif',
			'rang',
			'user_id' 
	];
	public $timestamps = true;
	public function user() {
		return $this->belongsTo ( 'App\Models\User' );
	}
}