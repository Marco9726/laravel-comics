<footer>
	<div id="main-footer" class="py-4">
		<div class="container-w60 h-100">
			<div class="row h-100">
				<div class="col-6 h-100">

					<div id="lists" class="d-flex flex-column flex-wrap debug pt-2">
						@foreach ($footerLists as $key => $item)
							<h5 class="font-pt mb-2 w-25">{{ $key }}</h5>
							<ul class="p-0 w-25">
								@foreach ($item as $li)
								<li>
									<small>{{$li}}</small>
								</li>
								@endforeach
							</ul>
						@endforeach
					</div>
					<div>
						<small>All Site Cantent TM and &#169; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved
						<a href="#">Cookies Settings</a></small>
					</div>
				</div>
				<div class="col-6"></div>
			</div>
		</div>
	</div>
</footer>