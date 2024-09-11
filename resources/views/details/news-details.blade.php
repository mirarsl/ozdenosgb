@extends('pages.details')
@section('details')
<section class="basindabiz">
 <div class="container">
  <div class="row">
   <div class="col-md-4">
    <div>
     <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" class="img-responsive">
    </div>
   </div>
   <div class="col-md-8">
    <div>
     {!! $Page->text !!}
     @if ($Page->button_title && $Page->button_link)
     <a target="_blank" class="btn btn-success" href="{{$Page->button_link}}">{{$Page->button_title}}</a>
     @endif
    </div>
   </div>
  </div>
 </div>
</section>
@endsection