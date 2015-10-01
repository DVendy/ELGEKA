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

    public function kecamatans() {
        return $this->hasMany('App\Kecamatan');
    }

	public function provinsi() {
        return $this->belongsTo('App\Provinsi');
    }
}
