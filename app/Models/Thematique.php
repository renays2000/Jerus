<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thematique extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'thematiques';
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
			'libelle'
	];
	
	public $timestamps = false;
}
