{{-- estendo la pagina con il layout base (header,jumbo e footer)  --}}
@extends('layouts.app')

{{-- valorizzo lo yield 'content' con il seguente contenuto --}}
@section('content')
<div id="blue-bg" class="bg-my-primary">
	<div class="container w-50">
		<div class="poster">
			<img src="{{ $comic['thumb']}}" alt="comic-poster" class="h-100">
			<small class="label-top px-1">COMIC BOOK</small>
			<small class="label-bottom">VIEW GALLERY</small>
		</div>
	</div>
</div>
<section id="comic-info" class="py-5">
	<div class="container w-50">
		<div class="row justify-content-between">
			{{-- col-left --}}
			<div class="col-left p-0">
				{{-- title --}}
				<h3 class="font-pt mb-3">{{ Str::upper( $comic['title']) }}</h3>
				{{-- info --}}
				<div id="shop-info" class="d-flex mb-2">
					<div class="col col-8 px-4 py-2 d-flex ">
						<span class="lightgreen">U.S. Price: </span> <span> {{ $comic['price'] }}</span>
						<span class="lightgreen ms-auto">AVAILABLE</span>
					</div>
					<div class="col col-4 px-4 py-2 text-center">
						Check Availability &#x25BE;
					</div>
				</div>
				<p>
					{{ $comic['description'] }}
				</p>
			</div>
			{{-- col-right --}}
			<div class="col-right p-0">
				<img src="{{Vite::asset('public/images/adv.jpg')}}" alt="ADV" class="img-fluid">
				<h6 class="font-pt m-0">ADVERTISIMENT</h6>
			</div>
		</div>
	</div>
</section>

@endsection