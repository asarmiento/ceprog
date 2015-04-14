<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model {

	
	protected $fillable = [

		'estrategia',
		'cognoscitivo',
		'actividad',
		'descripcion',
		'objetivo',
		'opcionuno',
		'opciondos',
		'opciontres',
		'valoractividad',
		'unidad',
		'evidencia',
		'caracteristicas',
		'realizacion',
		'fecha',
		'codigoactividad',
		'materia'

	];


	public function roles()
	{

		return $this->belongsToMany('Bican\Roles\Models\Role');
	}

	public function users()
	{

		return $this->belongsToMany('App\User');
	}

	public function scopeName($query, $name)
	{
		if ( trim($name) != "") 
		{
			
			$query->where('actividad', "LIKE", "%$name%");
		}

		
	}

	public function getUserListAttribute()
	{

		return $this->users()->lists('id');
	}

}
