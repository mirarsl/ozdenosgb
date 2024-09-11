@extends('layout.master')
@section('modules')
@if (isset($View) && View::exists('modules.' . $View))
@include('modules.' . $View, ['module' => $Page])
@endif
@isset($Meta->modules)
@forelse ($Meta->modules as $module)
@if (View::exists('modules.' . $module->slug))
@include('modules.' . $module->slug, ['module' => $module])
@endif
@empty
@endforelse
@endisset
@endsection
@section('content')
<div class="page-image-header">
	<div class="container">
		<h1>{{$Page->title}}</h1>
		<p>{{$Page->hero}}</p>
	</div>
</div>
<div class="container breadcrumb-container">
	@hasSection ('breadcrumb')
	@yield('breadcrumb')
	@else
	<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="{{route('home')}}" title="{{setting('site.title')}} Anasayfası" itemprop="item">
				<i class="fa fa-home"></i> 
				<span itemprop="name">Anasayfa</span>
			</a>
			<meta itemprop="position" content="1" />
		</li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="{{route('page',$Meta->slug)}}" title="{{setting('site.title')}} {{$Meta->title}}" itemprop="item">
				<span itemprop="name">{{$Meta->title}}</span>
			</a>
			<meta itemprop="position" content="2" />
		</li>
		<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="{{route($Route,$Page->slug)}}" title="{{setting('site.title')}} {{$Page->title}}" itemprop="item">
				<span itemprop="name">{{$Page->title}}</span>
			</a>
			<meta itemprop="position" content="3" />
		</li>
	</ol>
	@endif
</div>
@yield('details')
@yield('modules')
@endsection
