<header>
		<div class="container-fluid cabezera">
			<div class="row">
				<!-- <div class="col-md-1"></div> --> 
				<div class="col-md-2"> 
						<a title="Los Tejos" href="{{ route('vistas') }}"><img src="../../Imagenes/qwe.png" class="logo"></a>
				</div>
				<div class="col-md-10">
						<nav class="navbar navbar-default pegajoso">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">Menu</a>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li><a href="#" role="button">Mi carrito</a></li>
										<li><a href="#" role="button">Lista Deseos</a></li>
										<li>
	                                        <a href="{{ route('logout') }}"
	                                            onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                            Logout
	                                        </a>

	                                        <form id="logout-form" action="{{ route('salir') }}" method="POST" style="display: none;">
	                                            {{ csrf_field() }}
	                                        </form>
                                    	</li>
                                    	<li>{{ Auth::user()->name }}</li>
									</ul>
									<form class="navbar-form">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Palabra Clave">
										</div>
										<button type="submit" class=".clase2">Buscar</button>
									</form>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid dentro del navbar -->
						</nav>
					</div>
			</div>
		</div>
</header>

