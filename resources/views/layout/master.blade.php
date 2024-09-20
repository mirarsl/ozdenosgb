<!DOCTYPE html>
<html lang="{{app()->currentLocale()}}">
<head>
	<base href="{{ url('/') }}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-control" content="public">
	
	<link rel="canonical" href="{{ url()->full() }}" />
	{!! SEOMeta::generate() !!}
	{!! OpenGraph::generate() !!}
	{!! Twitter::generate() !!}
	{!! JsonLd::generate() !!}
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	@stack('links')
	{!! setting('site.header_libs') !!}
	@stack('styles')
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<a href="http://isgtakip.ozdenosgb.com/bizi_takip_edin" target=_blank class="portal_btn rotate">
			<div>Bizi Takip Edin</div>
		</a>
		<div class="container" id="header-container">
			<div class="navbar-phone">
				<a href="tel:{{$sharedContent['Contact']->phone1}}" title="{{setting('site.title')}} Müşteri Hizmetleri">{{$sharedContent['Contact']->phone1}}</a>
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{route('home')}}" title="{{setting('site.title')}} Anasayfası">
					<img src="img/logo_ozden_ersev.png" alt="Logo" title="Logo" class="img-responsive"/>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				{{menu('Header','menus.header')}}
				
			</div>
		</div>
	</nav>
	@yield('content')
	
	<footer id="myFooter">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="{{route('home')}}" title="{{setting('site.title')}} Anasayfası"><img src="/img/logo_footer.png" alt="{{setting('site.title')}} Logo" title="{{setting('site.title')}} Logo"/></a></div>
				</div>
				{{ menu('Footer','menus.footer') }}
				<div class="col-sm-2">
					<div class="social-networks">
						@if ($sharedContent['Social']->facebook)
						<a href="{{$sharedContent['Social']->facebook}}" class="twitter" target="_blank" title="Özden OSGB Facebook Hesabı"><i class="fa fa-facebook"></i></a>
						@endif
						@if ($sharedContent['Social']->instagram)
						<a href="{{$sharedContent['Social']->instagram}}" class="twitter" target="_blank" title="Özden OSGB Instagram Hesabı"><i class="fa fa-instagram"></i></a>
						@endif
						@if ($sharedContent['Social']->twitter)
						<a href="{{$sharedContent['Social']->twitter}}" class="twitter" target="_blank" title="Özden OSGB Twitter Hesabı"><i class="fa fa-twitter"></i></a>
						@endif
						@if ($sharedContent['Social']->google)
						<a href="{{$sharedContent['Social']->google}}" class="twitter" target="_blank" title="Özden OSGB Google Plus Hesabı"><i class="fa fa-google-plus"></i></a>
						@endif
					</div>
					<a href="{{route('page','iletisim')}}" type="button" class="btn btn-default">İletişim</a>
				</div>
			</div>
		</div>
	</footer>
	
	@stack('modals')
	
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<noscript id="deferred-styles">
		<link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="/css/owl-carousel.min.css"/>
		<link href="/css/website.css?v=45" rel="stylesheet">
	</noscript>
	<script>
		var loadDeferredStyles = function() {
			var addStylesNode = document.getElementById("deferred-styles");
			var replacement = document.createElement("div");
			replacement.innerHTML = addStylesNode.textContent;
			document.body.appendChild(replacement)
			addStylesNode.parentElement.removeChild(addStylesNode);
		};
		var raf = requestAnimationFrame || mozRequestAnimationFrame ||
		webkitRequestAnimationFrame || msRequestAnimationFrame;
		if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
		else window.addEventListener('load', loadDeferredStyles);
	</script>	<script src="js/owl.carousel.min.js"></script>
	<script
	src="https://app.livechatai.com/embed.js"
	data-id="clncw2kv30009l30f0bx7yz0q"
	async defer>
</script>
@stack('scripts')
@stack('page_codes')
</body>
</html>