<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Maestro;
use App\Actividad;
use App\User;
use App;
use Auth;

use Illuminate\Http\Request;

class ProfesorController extends Controller {



	public function __construct()
	{

		return $this->middleware('maestro');

		return $this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$profesores = Auth::user()->actividad()->name($request->get('name'))->paginate(5);

		return view('listaprofesor', compact('profesores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('create.actividad');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Maestro $request)
	{
		$user = Auth::user();
		
		$profesor = Actividad::create($request->all());

		$profesor->users()->attach($user);

		flash()->overlay('Ha sido creada correctamente', 'La actividad ' . $profesor->actividad);

		return redirect('profesor');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$profesor = Actividad::find($id);
		
		return view('showactividad', compact('profesor'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		

		$profesor = Actividad::find($id);

		$user = User::role('alm')->lists('name', 'id');

		return view('edit.editactividad', compact('profesor', 'user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Maestro $request)
	{
		$profesor = Actividad::find($id);

		$profesor->update($request->all());

		$profesor->users()->attach($request->input('user'));

		flash()->overlay('Ha sido asignado/editado correctamente ', 'La actividad '. $profesor->actividad);

		return redirect('profesor');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$profesor = Actividad::find($id);

		$profesor->delete($id);

		flash()->overlay('Ha sido borrado', 'La actividad ' . $profesor->actividad);

		return redirect('profesor');
	}

}
