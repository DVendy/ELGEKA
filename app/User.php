<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function artikels() {
        return $this->hasMany('App\Artikel');
    }

	public function rs() {
        return $this->belongsTo('App\Rs');
    }

	public function asuransi() {
        return $this->belongsTo('App\Asuransi');
    }

	public function penyakit() {
        return $this->belongsTo('App\Penyakit');
    }

    public function dokters() {
        return $this->belongsToMany('App/Doker', 'dokter_user', 'users_id', 'dokter_id');
    }

    public function obats() {
        return $this->belongsToMany('App/Obat', 'obat_user', 'users_id', 'obat_id');
    }
}
