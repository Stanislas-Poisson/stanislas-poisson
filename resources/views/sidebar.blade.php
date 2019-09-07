<aside class="mdc-drawer mdc-drawer--temporary mdc-typography">
	<nav class="mdc-drawer__drawer">
		@guest
			<header class="mdc-drawer__header">
				<div class="mdc-drawer__header-content">
					<a href="{{ route('home') }}" class="">
						<img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
					</a>
				</div>
			</header>
		@else
			<header class="mdc-drawer__header logged">
				<div class="mdc-drawer__header-content">
					<div>
						<i class="material-icons avatar" loaria-hidden="true">account_circle</i>
						<a href="{{ route('login') }}" class="name" aria-label="Mon Compte" alt="Mon Compte">Mon Compte</a>
						<img src="https://stanislas-poisson.fr/images/avatar-hd-2x.jpg" alt="StanislasP" class="avatar">
						<h3 class="name">Stanislas Poisson</h3>
						<p class="loggedBy">contact.stanislas.poisson@gmail.com</p>
					</div>
				</div>
			</header>
		@endauth
		<nav id="icon-with-text-demo" class="mdc-drawer__content mdc-list">
			@guest
				<a class="mdc-list-item" href="#">
					<i class="material-icons mdc-list-item__graphic" aria-hidden="true">inbox</i>Inbox
					<span href="#" class="mdc-list-item__meta" aria-label="View more information" title="More info">11</span>
				</a>
				<hr class="mdc-list-divider">
				<a class="mdc-list-item" href="#">
					<i class="material-icons mdc-list-item__graphic" aria-hidden="true">star</i>Star
					<span href="#" class="mdc-list-item__meta" aria-label="View more information" title="More info">1</span>
				</a>
			@else
			@endauth
		</nav>
	</nav>
</aside>
