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
		<div id="jumbotron">		
		</div>
		<div id="content" class="pb-2">
			<div class="container-w60 p-2">
				<h3 class="font-pt bg-my-primary text-center p-2 d-inline-block py-1 px-4">CURRENT SERIES</h3>
			</div>
		</div>
	</main>
	@include('components.footer')

</body>

</html>
