<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Indikasi extends Model {

	protected $table = 'indikasi';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama_indikasi'];

}
