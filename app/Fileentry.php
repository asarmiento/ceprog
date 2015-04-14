<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fileentry extends Model {

	


	protected $fillable = ['name', 'mensaje', 'filename', 'mime', 'original_filename'];


	public function users()
	{
		return $this->belongsToMany('App\User');
	}


	public function scopeNameAttribute($query, $name)
	{	

		if (trim($name) != "") 
		{
			$query->where('name', "LIKE", '%$name%');
		}

		

	}

}
