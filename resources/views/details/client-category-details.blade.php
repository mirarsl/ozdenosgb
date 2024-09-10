@extends('pages.details')
@section('details')
<div class="container">
 <div class="row ref-panel">
  @foreach ($List as $item)
  <div class="col-md-2 col-sm-4 col-xs-6">
   <div>
    <img src="{{asset($item->image)}}" alt="{{$item->title}}" class="img-circle img-thumbnail">
    <p>{{$item->title}}</p>
   </div>
  </div>
  @endforeach
 </div>
 @if ($Page->slug != 'hepsi')
 <a class="btn btn-info" style="width:100%; margin-top:20px;margin-bottom: 50px;" href="{{route('client-categories','hepsi')}}">Bütün Referanslarımızı Görün</a>
 @else
 <br><br>
 @endif
</div> 
@endsection