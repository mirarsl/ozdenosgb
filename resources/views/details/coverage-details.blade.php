@extends('pages.details')
@section('details')
<section class="blog">
 <div class="container">
  <div class="row">
   <div class="col-md-4 left-side">
    <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" title="{{$Page->title}}" class="img-responsive">
   </div>
   <div class="col-md-8">
    {!! $Page->text !!}
   </div>
  </div>
 </div>
</section>
@endsection