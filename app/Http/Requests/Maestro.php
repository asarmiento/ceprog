<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class Maestro extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			
		'estrategia' => 'required',
		'cognoscitivo' => 'required',
		'actividad' => 'required',
		'descripcion' => 'required',
		'objetivo' => 'required',
		'opcionuno' => 'required',
		'opciondos' => 'required',
		'opciontres' => 'required',
		'valoractividad' => 'required',
		'unidad' => 'required',
		'evidencia' => 'required',
		'caracteristicas' => 'required',
		'realizacion' => 'required',
		'fecha' => 'required',
		'codigoactividad' => 'required',
		'materia' => 'required'
		];
	}

}
