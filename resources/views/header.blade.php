<header class="mdc-toolbar mdc-toolbar--fixed demo-toolbar">
	<div class="mdc-toolbar__row">
		<section class="mdc-toolbar__section mdc-toolbar__section--align-start">
			<a href="#" id="menu" class="material-icons mdc-toolbar__menu-icon">menu</a>
			<a href="{{ route('home') }}" class="mdc-toolbar__title">
					<img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
				</a>
		</section>
		<section class="mdc-toolbar__section mdc-toolbar__section--align-end mdc-toolbar__section--shrink-to-fit" role="toolbar">
			<a href="#" class="mdc-toolbar__icon" aria-label="Qui sommes-nous" alt="Qui sommes-nous">Qui sommes-nous</a>
			<a href="#" class="mdc-toolbar__icon" aria-label="Nos offres" alt="Nos offres">Nos offres</a>
			<a href="#" class="mdc-toolbar__icon" aria-label="Besoin d'aide" alt="Besoin d'aide">Besoin d'aide</a> @guest
			<a href="{{ route('login') }}" class="mdc-toolbar__icon" aria-label="Mon Compte" alt="Mon Compte">
						<i class="material-icons" aria-hidden="true">account_circle</i> Mon Compte
					</a> @else {{-- {{ Auth::user()->name }} --}}
			<a href="#" class="mdc-toolbar__icon toggle" aria-label="Mon Compte" alt="Mon Compte">
						<img src="https://stanislas-poisson.fr/images/avatar-hd-2x.jpg" alt="StanislasP" class="avatar">
						<i class="material-icons" aria-hidden="true">account_circle</i> Mon Compte
					</a>
			<div class="mdc-menu-anchor">
				<div class="mdc-menu" tabindex="-1" id="demo-menu">
					<ul class="mdc-menu__items mdc-list" role="menu" aria-hidden="true" style="transform: scale(1, 1);">
						<li class="mdc-list-item" role="menuitem" tabindex="0" style="transition-delay: 0.069s;">Back</li>
						<li class="mdc-list-item" role="menuitem" tabindex="0" style="transition-delay: 0.124s;">Forward</li>
						<li class="mdc-list-item" role="menuitem" tabindex="0" style="transition-delay: 0.179s;">Reload</li>
						<li class="mdc-list-divider" role="separator"></li>
						<li class="mdc-list-item" role="menuitem" tabindex="0" style="transition-delay: 0.236s;"><a href="{{ route('logout') }}" class="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
					</ul>
				</div>
			</div>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
			@endauth
		</section>
	</div>
</header>

<script>
@section('javascript')
	@parent

	@guest
	@else
		var menuEl = document.querySelector('#demo-menu'); var menu = new mdc.menu.MDCMenu(menuEl); var toggle = document.querySelector('.toggle');
		toggle.addEventListener('click', function() { menu.open = !menu.open; });
	@endauth
@endsection
</script>
