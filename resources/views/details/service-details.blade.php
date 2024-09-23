@extends('pages.details')
@section('breadcrumb')
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
    @foreach ($Page->allParent() as $item)
    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="{{route($Route,$item->fullSlug())}}" title="{{$item->title}}" itemprop="item">
            <span itemprop="name">{{$item->title}}</span>
        </a>
        <meta itemprop="position" content="{{$loop->index + 3}}" />
    </li>
    @endforeach
    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="{{route($Route,$Page->fullSlug())}}" title="{{$Page->title}}" itemprop="item">
            <span itemprop="name">{{$Page->title}}</span>
        </a>
        <meta itemprop="position" content="{{count($Page->allParent()) + 3}}" />
    </li>
</ol>
@endsection
@section('details')
<section class="blog">
    <div class="container">
        <div class="row">
            @if ($Page->show_image == 1 && $Page->calculation == 0)
            <div class="col-md-4 left-side">
                <div class="thumbnail">
                    <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" class="img-responsive">
                </div>
            </div>
            @endif
            <div class="{{$Page->show_image == 1 && $Page->calculation == 0 ? ' col-md-8':'col-md-12 text-center'}}">
                @if ($Page->show_list == 1)
                @include('details.partials.altlist',['data' => $Page->data])
                @endif
                {!! $Page->text !!}
                @if ($Page->calculation == 1)
                @include('details.partials.calculate')
                @endif
                @if ($Page->button_link != null && $Page->button_title != null)
                <a href="{{$Page->button_link}}" class="btn btn-hero btn-lg">{{$Page->button_title}}</a>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection