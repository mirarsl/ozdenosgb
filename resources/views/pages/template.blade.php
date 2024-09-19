@extends('layout.master')
@section('content')
<div class="page-image-header">
    <div class="container">
        <h1>{{$Page->title}}</h1>
        <p>{{$Page->hero}}</p>
    </div>
</div>
@hasSection ('breadcrumb')
@yield('breadcrumb')
@else
<div class="container breadcrumb-container">
    <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="{{route('home')}}" title="{{setting('site.title')}} Anasayfası" itemprop="item">
                <i class="fa fa-home"></i> 
                <span itemprop="name">Anasayfa</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        @foreach ($Page->allParent() as $item)
        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="{{route('page',$item->fullSlug())}}" title="{{$item->title}}" itemprop="item">
                <span itemprop="name">{{$item->title}}</span>
            </a>
            <meta itemprop="position" content="{{$loop->index + 3}}" />
        </li>
        @endforeach
        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="{{route('page',$Page->fullSlug())}}" title="{{$Page->title}}" itemprop="item">
                <span itemprop="name">{{$Page->title}}</span>
            </a>
            <meta itemprop="position" content="{{count($Page->allParent()) + 3}}" />
        </li>
    </ol>
</div>
@endif
@if (!(empty($Page->data())))
@if (View::exists('modules.' . $Page->list_name))
@include('modules.' . $Page->list_name, ['module' => $Page])
@endif
@elseif($Page->list_name)
@if (View::exists('modules.' . $Page->list_name))
@include('modules.' . $Page->list_name, ['module' => $Page])
@endif
@else
@include('modules.details', ['module' => $Page])
@endif
@hasSection ('modules')
@yield('modules')
@else
@isset($Page->modules)
@forelse ($Page->modules as $module)
@if (View::exists('modules.' . $module->slug))
@include('modules.' . $module->slug, ['module' => $module])
@endif
@empty
@endforelse
@endisset
@endif
@endsection
