<section class="py-3">
		<div class="container py-2">
			<div class="row">
				<div class="col-4 col-sm-2">
					<div class="text-center">
						<img src="{{asset('images/directur.png')}}">
					</div>
				</div>
				<div class="col-4 col-sm-2">
					<div class="text-center">
						<img src="{{asset('images/marca-peru.png')}}">
					</div>
				</div>
				<div class="col-4 col-sm-2">
					<div class="text-center">
						<img src="{{asset('images/mincetur.png')}}">
					</div>
				</div>
				<div class="col-4 col-sm-2">
					<div class="text-center">
						<img src="{{asset('images/paypal.png')}}">
					</div>
				</div>
				<div class="col-4 col-sm-2">
					<div class="text-center">
						<img src="{{asset('images/promperu.png')}}">
					</div>
				</div>
				<div class="col-4 col-sm-2">
					<div class="text-center">
						<img src="{{asset('images/westernunion.png')}}">
					</div>
				</div>
			</div>
		</div>
</section>
<footer class="bg-dark">
	<div class="container">
		<div class="row">
			<div class="col text-center py-4">
				@if($locale == 'en' OR $locale == 'EN')
				<ul class="list-unstyled list-inline">
					  <li class="list-inline-item text-white h5"><a href="{{route('booking_path', $locale)}}">Booking</a></li>
					  <li class="list-inline-item text-white h5"> <a href="{{route('terms_conditions_path', $locale)}}/">Conditions</a></li>
					  <li class="list-inline-item text-white h5"><a href="{{route('contact_us_path', $locale)}}">Contact us</a></li>
					  <li class="list-inline-item text-white h5"><a href="{{route('partner_path', $locale)}}">Friends</a></li>
					  <li class="list-inline-item text-white h5"><a href="{{route('employment_path', $locale)}}">Employment</a></li>
				</ul>
				@endif
				@if($locale == 'es' OR $locale == 'ES')
				<ul class="list-unstyled list-inline">
					  <li class="list-inline-item text-white h5"><a href="{{route('booking_path', $locale)}}">Booking</a></li>
					  <li class="list-inline-item text-white h5"> <a href="{{route('terms_conditions_es_path', $locale)}}/">Terminos</a></li>
					  <li class="list-inline-item text-white h5"><a href="{{route('contact_us_path', $locale)}}">Contact us</a></li>
					  <li class="list-inline-item text-white h5"><a href="{{route('partner_path', $locale)}}">Friends</a></li>
					  <li class="list-inline-item text-white h5"><a href="{{route('employment_path', $locale)}}">Employment</a></li>
				</ul>
				@endif
			</div>
		</div>
	</div>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-79425114-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-79425114-2');
</script>
