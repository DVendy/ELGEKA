<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model {

	protected $table = 'artikel';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['judul', 'isi'];

}