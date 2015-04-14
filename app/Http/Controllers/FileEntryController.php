<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fileentry;
use App\User;
use Request;
use Input;
use Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class FileEntryController extends Controller {

	
	public function __construct()
	{	

		

		 $this->middleware('auth');
	}




	public function index()
	{
		
		$entries = Auth::user()->fileentries()->paginate(5);

		return view('archivo', compact('entries'));
	}



	public function create()
	{
		
		$users = User::role('alm')->lists('name', 'id');

		return view('fileentries.create', compact('users'));
	}

	public function add() {
 
		$file = Request::file('archivo');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$entry = Fileentry::create([

			'mime' => $file->getClientMimeType(),
			'original_filename' => 	$file->getClientOriginalName(),
			'filename' => $file->getFilename().'.'.$extension,
			'name' => Input::get('name'),
			'mensaje' => Input::get('mensaje')

			]);

		$entry->users()->attach(Input::get('user'));
 
		$entry->save();
 			
 		flash()->overlay('el archivo se a enviado correctamente', 'Archivo');

		return redirect()->back();
		
	}



	public function get($filename){
	
		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
		$file = Storage::disk('local')->get($entry->filename);
 
		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
	}

}
