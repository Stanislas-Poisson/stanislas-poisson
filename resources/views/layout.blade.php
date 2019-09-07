<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', config('app.name'))</title>
	<meta name="description" content="@yield('description', trans('layout.description'))">

	<!-- Facebook Open Graph -->
	<meta property="og:url" content="{{ config('app.url') }}">
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{ config('app.name') }}">
	<meta property="og:description" content="@yield('description', trans('layout.description'))">

	<meta property="og:image" content="{{ asset('images/social/share-gpl3c.jpg') }}">
	<meta property="og:image:width" content="1240">
	<meta property="og:image:height" content="930">

	<meta property="og:image" content="{{ asset('images/social/share-f.jpg') }}">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="900">

	<meta property="og:image" content="{{ asset('images/social/share-pe.jpg') }}">
	<meta property="og:image:width" content="735">
	<meta property="og:image:height" content="535">

	<meta property="og:image" content="{{ asset('images/social/share-gpl2c.jpg') }}">
	<meta property="og:image:width" content="726">
	<meta property="og:image:height" content="544">

	<meta property="og:image" content="{{ asset('images/social/share-gpl.jpg') }}">
	<meta property="og:image:width" content="568">
	<meta property="og:image:height" content="284">

	<meta property="og:image" content="{{ asset('images/social/share-pp.jpg') }}">
	<meta property="og:image:width" content="235">
	<meta property="og:image:height" content="171">

	<meta property="og:image" content="{{ asset('images/social/share-in.jpg') }}">
	<meta property="og:image:width" content="180">
	<meta property="og:image:height" content="110">

	<meta property="og:image" content="{{ asset('images/social/share-gps.jpg') }}">
	<meta property="og:image:width" content="150">
	<meta property="og:image:height" content="150">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@StanislasP">
	<meta name="twitter:creator" content="@StanislasP">
	<meta name="twitter:title" content="{{ config('app.name') }}">
	<meta name="twitter:description" content="@yield('description', trans('layout.description'))">
	<meta name="twitter:image" content="{{ asset('images/social/share-t.jpg') }}">
	<meta name="twitter:image:src" content="{{ asset('images/social/share-t.jpg') }}">

	<!-- Google + -->
	<link rel="publisher" href="https://plus.google.com/u/0/+StanislasPoisson">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/mcw.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

</head>
<body class="mdc-typography">
	@include('header')
	@include('sidebar')
	<main>
		@yield('main')
	</main>
	<footer>
		<div class="mdc-layout-grid">
			<div class="mdc-layout-grid__inner">
				<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3">
					<h3>Retrouvez-moi</h3>
					<i class="fab fa-github"></i>
					<i class="fab fa-google-plus-g"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>
					<i class="fab fa-spotify"></i>
					<i class="fab fa-facebook-f"></i>
				</div>
				<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3">
					<h3>Accès rapide</h3>
					<a href="#" class="mdc-button mdc-button--raised mdc-ripple-upgraded">Déposer mon CV</a>
					<a href="#" class="mdc-button mdc-button--raised secondary-filled-button">Déposer une annonce</a>
				</div>
				<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3">
					<h3>Contactez-nous</h3>
					02 85 52 68 12
				</div>
			</div>
		</div>
	</footer>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="{{ asset('js/mcw.js') }}"></script>
	<script>
		// Detect old browser
		var $buoop = {notify:{e:-5,f:-4,o:-4,s:-2,c:-4},insecure:true,unsupported:true,style:"bottom",api:5};
		function $buo_f(){
			var e = document.createElement("script");
			e.src = "//browser-update.org/update.min.js";
			document.body.appendChild(e);
		};
		try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
		catch(e){window.attachEvent("onload", $buo_f)}

		// Init Material design
		mdc.autoInit();

		// Setup the drawer
		let drawer = new mdc.drawer.MDCTemporaryDrawer(document.querySelector('.mdc-drawer--temporary'));
		document.querySelector('#menu')
			.addEventListener('click', function(e) {
				e.preventDefault();
				drawer.open = true;
			});

		// Import other js
		@yield('javascript')
	</script>
</body>
</html>
