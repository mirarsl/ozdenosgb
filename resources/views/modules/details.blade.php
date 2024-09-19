<section class="osgb-nedir {{$Page->slug}}">
 <div class="container">
  <div class="row">
   @if (isset($Page->image))
   <div class="col-md-4">
    <div class="thumbnail">
     <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" title="{{$Page->title}}">
    </div>
   </div>
   @endif
   <div class="{{isset($Page->image) ? 'col-md-8' : 'col-md-12'}}">
    {!! $Page->text !!}
   </div>
  </div>
 </div>
</section>