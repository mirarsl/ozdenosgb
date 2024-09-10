@extends('layout.master')
@section('content')
<div class="page-image-header">
    <div class="container">
        <h1>{{$Page->title}}</h1>
        {!! $Page->text !!}
    </div>
</div>
<div class="container breadcrumb-container">
    <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="Anasayfa" title="{{setting('site.title')}} Anasayfası" itemprop="item">
                <i class="fa fa-home"></i> 
                <span itemprop="name">Anasayfa</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="{{route('page',$Page->slug)}}" title="{{$Page->title}}" itemprop="item">
                <span itemprop="name">{{$Page->title}}</span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
    </ol>
</div>
@if (!(empty($Page->data())))

    @if (View::exists('modules.' . $Page->list_name))
        @include('modules.' . $Page->list_name, ['module' => $Page])
    @endif
@endif
@isset($Page->modules)
    @forelse ($Page->modules as $module)
        @if (View::exists('modules.' . $module->slug))
            @include('modules.' . $module->slug, ['module' => $module])
        @endif
    @empty
    @endforelse
@endisset
@yield('modules')
@endsection
