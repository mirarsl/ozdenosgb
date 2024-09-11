<section class="osgb-nedir {{$Page->slug}}">
 <div class="container">
  <div class="row">
   <div class="col-md-4">
    <div class="thumbnail">
     <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" title="{{$Page->title}}">
    </div>
   </div>
   <div class="col-md-8">
    {!! $Page->text !!}
   </div>
  </div>
 </div>
</section>