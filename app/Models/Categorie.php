<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
			'libelle',
			'idThematique'
	];
	
	public $timestamps = false;
	
	public function user() {
		return $this->belongsTo ( 'App\Models\Thematique' );
	}
}
