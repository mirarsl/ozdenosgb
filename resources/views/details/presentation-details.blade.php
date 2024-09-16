@extends('pages.details')
@section('details')
<section class="basindabiz">
 <div class="container">
  <div class="row">
   <div class="col-md-4">
    {!! $Page->text !!}
   </div>
   <div class="col-md-8">
    <p class="slideshare"><iframe src="{{$Page->embed}}" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen> </iframe></p>
   </div>
  </div>
 </div>
</section>
@endsection