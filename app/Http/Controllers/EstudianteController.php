<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Actividad;
use App;

use Illuminate\Http\Request;

class EstudianteController extends Controller {





	public function __construct()
	{

		return $this->middleware('alumnos');

		return $this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
			$alumnos = Auth::user()->actividad()->name($request->get('name'))->paginate(5);

			return view('listalumnos', compact('alumnos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pdf = App::make('dompdf');
		$alumnos = Actividad::find($id);
		$pdf->loadview('showalumno', compact('alumnos'))->setPaper('a4')->setOrientation('landscape');
		return $pdf->stream();
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$alumnos = Actividad::find($id);

		$alumnos->delete($id);

		flash()->overlay('Ha sido borrado', 'La actividad ' . $alumnos->actividad);

		return redirect('alumnos');
	}

}
