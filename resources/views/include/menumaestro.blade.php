<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">UCP</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a  href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu Docente</a>
						<ul class="dropdown-menu" role="menu">	
						<li><a  href="/profesor/create">Crear Actividad</a></li>
						<li><a href="/profesor">Lista de Actividades</a></li>
						</ul>
					</li>

					<li><a href="/fileentry">Archivos adjuntos</a></li>
					<li><a href="/fileentry/create">Subir actividad</a></li>

				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">{{ trans('validation.attributes.logout') }}</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>