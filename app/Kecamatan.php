<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model {

	protected $table = 'kecamatan';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama_kecamatan'];

    public function kelurahans() {
        return $this->hasMany('App\Kelurahan');
    }

	public function Kotakab() {
        return $this->belongsTo('App\Kotakab');
    }

}
