<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
	@include('components.header')
	<main>
		@include('components.jumbotron')
		<div id="content" class="pb-2">
			<div class="container-w60">
				<h3 class="font-pt bg-my-primary text-center d-inline-block px-4">CURRENT SERIES</h3>
				<div class="row justify-content-between flex-wrap">
				@foreach ($comics as $comic)
					<div class="comic-card mb-4">
						<div class="comic-img mb-3">
							<a href="#">
								<img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}">
							</a>
						</div>
						<a href="#" class="text-white">{{ Str::upper( $comic['series']) }}</a>
					</div>
				@endforeach

				</div>
			</div>
		</div>
	</main>
	@include('components.footer')

</body>

</html>
