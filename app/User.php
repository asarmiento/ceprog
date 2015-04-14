<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Bican\Roles\Contracts\HasRoleAndPermissionContract;
use Bican\Roles\Traits\HasRoleAndPermission;


class User extends Model implements AuthenticatableContract, CanResetPasswordContract,  HasRoleAndPermissionContract {

	use Authenticatable, CanResetPassword,  HasRoleAndPermission;

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


	public function actividad()
	{

		return $this->belongsToMany('App\Actividad');

	}

	public function fileentries()
	{

		return $this->belongsToMany('App\Fileentry');
	}



	public function setPasswordAttribute($password)
	{

		if ( ! empty($password)) 
		{
			
			$this->attributes['password'] = bcrypt($password);
		}

		
	}

	public function getRoleListAttribute()
	{

		return $this->roles->lists('id');
	}

	public function scopeName($query, $name)
	{

		if (trim($name) != "") 
		{	

			$query->where('name', "LIKE", "%$name%");
			
		}	

		
	}

}
