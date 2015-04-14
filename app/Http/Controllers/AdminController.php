<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin;
use App\Http\Requests\EditAdmin;
use Bican\Roles\Models\Role;
use App\User;
use Auth;

use Illuminate\Http\Request;

class AdminController extends Controller {


	public function __construct()
	{
		return $this->middleware('admin');
		return $this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{	

		$users = User::name($request->get('name'))->paginate(5);
		return view('lista', compact('users', 'role'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$role = Role::lists('name', 'id');
		return view('create.user', compact('role'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Admin $request)
	{

		$user = User::create($request->all());
		$user->attachRole($request->input('role'));
		flash()->overlay('Ha sido creado', 'El usuario ' . $user->name);
		return redirect('admin');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$users = User::find($id);
		return view('show', compact('users'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		$role = Role::lists('name', 'id');
		return view('edit.user', compact('user', 'role'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, EditAdmin $request)
	{
		$user = User::find($id);
		$user->update($request->all());
		$user->roles()->sync($request->input('role_list'));
		flash()->overlay('Ha sido editado', 'El usuario ' . $user->name);
		return redirect('admin');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{

		$user = User::find($id);
		$user->delete();
		flash()->overlay('El usuario ha sido borrado', 'El usuario' . $user->name);
		return redirect('admin');
	}

}
