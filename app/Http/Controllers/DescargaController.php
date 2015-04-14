<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fileentry;
use App\User;
use Auth;

use Illuminate\Http\Request;

class DescargaController extends Controller {

	


	public function __construct()
	{
		$this->middleware('alumnos');
		$this->middleware('auth');
	}

	public function index()
	{
		$entries = Auth::user()->fileentries()->paginate(5);
		return view('file', compact('entries'));
	}


	public function create()
	{
		$alumnos = User::role('prf')->lists('name', 'id');
		return view('fileentries.descarga', compact('alumnos'));
	}
}
