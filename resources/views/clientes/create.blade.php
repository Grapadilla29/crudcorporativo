<!DOCTYPE html>
<html lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

	<title>Ciudad Tecnópolis| Correo corporativo</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- FAVICON -->
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

	<!-- ICONS -->
	<link rel="stylesheet" href="{{asset('css/icons/fontawesome/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/icons/themify/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/icons/ionicons/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/icons/icomoon/style.css')}}">

	<!-- THEME / PLUGIN CSS -->
	<link rel="stylesheet" href="{{asset('js/vendors/flexslider/flexslider.css')}}">
	<link rel="stylesheet" href="{{asset('js/vendors/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset('js/vendors/swipebox/css/swipebox.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- SKIN -->
	<link rel="stylesheet" title="cyan" href="{{asset('css/skins/skin-cyan.css')}}"/>

    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<div id="page-top"></div>
    
<div id="wrapper">
	<!-- HEADER -->
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header pull-left">
					<!-- Logo -->
					<div id="logotipo">
						<img src="{{asset('images/logo-blanco-png.png')}}" width="270" height="80"
						alt="Haz clic aquí para volver a la página de inicio">
						</div>
				</div>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<div class="top-contact pull-right editContent">
					<i class="icon-phone"></i> <span>Contáctenos</span> +(57) 317 671 1103
				</div>
				<!-- Navmenu -->
				
			</div>
		</nav>
	</header>
	<!-- HEADER -->

	<!-- INTRO HEAD -->
	<section id="intro head" class="intro head"></section>
	@if(Session::has('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		{{Session::get('message')}}
		</div>
	@endif
	<div class="intro2">
		<div class="overlay"></div>
		<div class="container">
			<div class="row center-content">
				<div class="col-md-5 col-sm-5">
					<form class="introform" action="{{url('/clientes')}}" id="invite" method="POST">
						@csrf
						@if (count($errors)>0)

							<div class="alert alert-danger" role="alert">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>   

						@endif
						<h4>Registrate <span> y obten el 20% Dto!</span></h4>
						<p>En Correos Corporativos de alta seguridad y capacidad.<br> Empieza con tu negocio con tu nombre.com, co o .com.co</p>
						<div class="row">
							<div class="col-xs-6 col-sm-12 col-md-6">
								<input type="text" name="name" id="name" class="form-control" placeholder="Nombre"data-validate="validate(required, name)">
							</div>
							<div class="col-xs-6 col-sm-12 col-md-6">
								<input type="text" name="phone" id="phone" class="form-control" placeholder="Teléfono"data-validate="validate(required, phone)">
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<select name="country" id="country" class="form-control" data-validate="validate(required, country)">
									<option selected>Choose country</option>
									@foreach ($countries as $country)
										<option value="{{ $country['name'] }}"> {{ $country['name'] }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<input id="campaing" name="campaing" type="hidden" value="expansion">

						<div class="row">
							<div class="col-xs-12">
								<input type="email" class="form-control" placeholder="Email address here" name="email" id="eaddress"data-validate="validate(required, email)">
							</div>
						</div>
						

						<button type="submit" class="btn btn-default btn-block btn-ico text-center">Enviar Registro
						<i class="fa fa-envelope-o"></i></button>
						<p class="small">Al registrate, acepta los Términos de servicio y la ley de protección de datos.</p>
					</form>
					<span id="result"></span>
				</div>
				<div class="col-md-6 col-sm-7 col-md-push-1">
					<img src="{{asset('images/slide/imagen-slider-mini-2.png')}}" class="img-responsive" alt=""/>
				</div>
			</div>
		</div>
	</div>
	<!-- INTRO HEAD -->

	<!-- CLIENTS -->
	<!-- CLIENTS -->

	<!-- SERVICES -->
	<div class="service-content" id="services">
		<div class="container">
			<h2>Conoce las Funcionalidades y beneficios de correos seguros y de alta calidad.</h2>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="icon-box text-center">
						<span class="ico">
						<i class="fa icon-monitor fa-stack-1x fa-inverse"></i>
						</span>
						<h4>IMAP seguro</h4>
						<p> El Correo es totalmente compatible con Outlook y cualquier
						   otro cliente de correo electrónico.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="icon-box text-center">
						<span class="ico">
						<i class="fa icon-albums fa-stack-1x fa-inverse"></i>
						</span>
						<h4>Spam y virus</h4>
						<p>Nuestro sistema descomprime, analiza, escanea
					    los correos para la detección del virus. </p>	
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="icon-box text-center">
						<span class="ico">
						<i class="fa icon-bicycle fa-stack-1x fa-inverse"></i>
						</span>
						<h4>50 MB de archivos adjuntos.</h4>
						<p>podra enviar fotos, videos y otros archivos adjuntos grandes, a comparación de otros.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="icon-box text-center">
						<span class="ico">
						<i class="fa icon-box2 fa-stack-1x fa-inverse"></i>
						</span>
						<h4>25 GB de almacenamiento</h4>
						<p>Nuestros buzones tienen 25 Gb de capacidad y estamos
						 trabajando para que sean más.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="icon-box text-center">
						<span class="ico">
						<i class="fa icon-box2 fa-stack-1x fa-inverse"></i>
						</span>
						<h4>Recupere correo eliminado</h4>
						<p>La información de su cuenta se guarda centros de nivel de datos.
					    Restauramos directamente desde el panel de control sin ningún costo adicional</p>
					</div>
				</div>
				<br>
				<div class="col-md-3 col-sm-6">
					<div class="icon-box text-center">
						<span class="ico">
						<i class="fa icon-albums fa-stack-1x fa-inverse"></i>
						</span>
						<h4>Migraciones fáciles Garantia 100%</h4>
						<p> orientamos cómo hacer la migración ejemplo: mover los datos de un correo electrónico a otro correo osi usted desea
						 nosotros nos encarguemos de la migración. </p>					
					</div>
				</div>
				<br>
				<div class="col-md-3 col-sm-6">
					<div class="icon-box text-center">
						<span class="ico">
						<i class="fa icon-bicycle fa-stack-1x fa-inverse"></i>
						</span>
						<h4>Soporte Personalizado.</h4>
						<p>Instrucciones simples de configuración, tutoriales de video y
						chat, llamadas, Su opinión y su felicidad es lo más importante para nosotros.</p>
					</div>
				</div>
				<br>
				<div class="col-md-3 col-sm-6">
					<div class="icon-box text-center">
						<span class="ico">
						<i class="fa icon-box2 fa-stack-1x fa-inverse"></i>
						</span>
						<h4>Calendario Personal</h4>
						<p>Accede a todos los contactos, calendario, listas de tareas y notas en tu
						escritorio, portátiles y dispositivos móviles.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- SERVICES -->

	<!-- INFO CONTENT -->
	<div class="info-content">
		<div class="container">
			<div class="row center-content">
				<div class="col-md-8">
					<img src="{{asset('images/1.png')}}" class="img-responsive " alt="">
				</div>
				<div class="col-md-4">
					<h4>Por qué la expansión de <br>su empresa no tiene limites</h4>
					<p>Rackspace Webmail es lo suficientemente potente como para ser su aplicación de mensajería de todos los días, de correo electrónico. Además de las sólidas
					capacidades de correo electrónico, también cuenta con aplicaciones y herramientas de colaboración para ayudar a su empresa a colaborar y comunicarse de manera más eficaz.</p>
					<a href="#inicio" class="btn btn-default">Empieza ya</a>
				</div>
			</div>
		</div>
	</div>
	<!-- INFO CONTENT -->

	<!-- DUAL CONTENT -->
	<div class="dual-content" id="dual-info">
		<div class="container-fluid">
			<div class="row">
				<div class="dual-img"></div>
				<div class="col-md-6">
				</div>
				<div class="col-md-6">
					<div class="col-md-9">
						<div class="dc-info">
							<h4>Algunos beneficios &amp; funciones más que vas a tener</h4>
							<p>Correo electrónico sobre la marcha nunca se detienen y el correo electrónico debe ser accesible desde cualquier lugar y en cualquier momento.
							 Con Rackspace Email, puede disfrutar del acceso IMAP en prácticamente cualquier teléfono móvil o tableta.
								</p>
							<ul class="space30">
								<li><span class="fa fa-check list-icon" style=""></span><a href="#">Mensajería instantánea (chat)</a></li>
								<li><span class="fa fa-check list-icon" style=""></span><a href="#">Respuesta automática fuera de la oficina</a></li>
								<li><span class="fa fa-check list-icon" style=""></span><a href="#">Varias identidades y firmas de correo</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- DUAL CONTENT -->

	<!-- INFO CONTENT -->
	<!-- INFO CONTENT -->

	<!-- FEATURES -->
	<!-- FEATURES -->

	<!-- TESTIMONIALS -->
	<!-- TESTIMONIALS -->

	<!-- PRICING -->
	<!-- PRICING -->

	<!-- CALL TO ACTION -->
	<div class="cta-content">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-8 col-md-offset-2">
					<i class="ti-shopping-cart head-ico"></i>
					<h3>Tu correo de gerencia@tuempresa.com !<br>¡20% DTO EMPIEZA YA!</h3>
					<p class="space30">Valido por una semana.</p>
					<a href="#" class="btn btn-ico">Registrate o llamanos </a>
					<a href="#" class="btn btn-ico">+(57) 317 671 1103</a>
				</div>
			</div>
		</div>
	</div>
	<!-- CALL TO ACTION -->

	<!-- FOOTER -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div id="logotipo">
						<img src="{{asset('images/logo-blanco-png.png')}}" width="270" height="80"
						alt="Haz clic aquí para volver a la página de inicio">
						</div>
					<p>El mejor aliado para tu marca o empresa.</p>
					<ul class="footer-social">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<p>&copy; 2021. Ciudad Tecnópolis. Todos los derechos reservados.<br>Un servicio de correo Corporativo de calidad &amp;seguro</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER -->
</div>

<!-- JAVASCRIPT =============================-->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/vendors/flexslider/flexslider.js')}}"></script>
<script src="{{asset('js/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.placeholder.js')}}"></script>
<script src="{{asset('js/vendors/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/vendors/mc/jquery.ketchup.all.min.js')}}"></script>
<script src="{{asset('js/vendors/mc/main.js')}}"></script>
<script src="{{asset('js/vendors/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/vendors/swipebox/js/jquery.swipebox.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
