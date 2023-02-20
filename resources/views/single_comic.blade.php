{{-- estendo la pagina con il layout base (header,jumbo e footer)  --}}
@extends('layouts.app')

{{-- valorizzo lo yield 'content' con il seguente contenuto --}}
@section('content')
<div id="blue-bg" class="bg-my-primary">
	<div class="container-w60">
		<div class="poster">
			<img src="{{ $comic['thumb']}}" alt="comic-poster" class="h-100">
			<small class="label-top px-1">COMIC BOOK</small>
			<small class="label-bottom">VIEW GALLERY</small>
		</div>
	</div>
</div>
<div class="container-w60">
	<div class="row">
		<div class="col-12">

		</div>
	</div>
</div>
@endsection