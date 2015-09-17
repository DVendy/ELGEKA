<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kotakab extends Model {

	protected $table = 'kotakab';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama_kotakab'];

}
