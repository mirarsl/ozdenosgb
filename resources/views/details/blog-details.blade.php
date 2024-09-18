@extends('pages.details')
@section('details')
<section class="blog">
 <div class="container">
  <div class="row">
   @if($Page->image != null)
   <div class="col-md-4 left-side">
    <div class="thumbnail">
     <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" class="img-responsive">
    </div>
    <div class="writer-area">
     @if($Page->author != null)
     <p><i class="fa fa-user"></i> <b>Yazan:</b> {{$Page->author}}</p>
     @endif
     <p><i class="fa fa-calendar"></i> <b>Tarih:</b> {{$Page->date('d/m/Y')}}</p>
    </div>
   </div>
   @endif
   <div class="{{$Page->image != null ? 'col-md-8' : 'col-md-12'}}">
    {!! $Page->text !!}
   </div>
  </div>
 </div>
</section>
@endsection