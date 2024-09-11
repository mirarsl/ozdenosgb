<section>
 <div class="container">
  <div class="row musteri-kulubu-page">
   <div class="col-lg-3">
    <img src="{{asset($Page->image)}}" class="img-responsive img-circle" alt="{{$Page->title}}" title="{{$Page->title}}"/>
   </div>
   <div class="col-lg-9">
    <div class="row">
     <div class="col-md-12">
      {!! $Page->text !!}
     </div>
    </div>
   </div>
  </div>
 </div>
</section>