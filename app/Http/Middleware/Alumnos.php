<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Routing\Middleware;
 
class Alumnos implements Middleware {
 
	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;
 
	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}
 
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ( ! $this->auth->user()->is('alm'))
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				flash()->overlay('Todavia tu perfil no finaliza porfavor contacta a recursos humanos', 'Error de Autorizacion ');

				return redirect('/home');
			}
		}
 
		return $next($request);
	}
 
}