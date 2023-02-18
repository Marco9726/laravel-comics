<header>
	<div id="top-bar" class="bg-my-primary">
		<div class="container-w60 text-end text-white font-mukta">
			<small> DC POWER VISA &#174;</small>
			<small class="ms-5"> ADDITIONAL DC SITES &#x25BE;</small>
		</div>
	</div>
	<div id="main-header">
		<div class="container-w60 font-pt">
			<div class="row align-items-center">
				<div class="col" id="logo">
					<h1>LOGO</h1>
				</div>
				<nav class="col">
					<ul class="d-flex mb-0">
						{{-- foreach per ciclare gli elementi dell'array associativo 'headerMenu' --}}
						@foreach ($headerMenu as $key => $item)
						<li class="{{ Route::currentRouteName() == $key ? 'active' : '' }}"> 
							{{-- valore dell'href = al path definito nell'array in web.php  --}}
							<a href="{{$item}}" class="debug ms-4">{{ Str::upper($key) }}</a>
						 </li>
						@endforeach
					</ul>
				</nav>
				<div class="col">
					SEARCHBAR
				</div>
			</div>
		</div>
	</div>
</header>