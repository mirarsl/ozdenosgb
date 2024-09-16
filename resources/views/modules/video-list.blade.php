<section class="afis">
 <div class="container">
  <div class="row">
   @foreach ($Page->data() as $item)
   <div class="col-md-4">
    <div class="thumbnail">
     <iframe width="100%" height="300" src="https://www.youtube.com/embed/{{$item->video}}" frameborder="0" title="{{$item->title}}" allowfullscreen></iframe>
    </div>
   </div>
   @endforeach
  </div>
  
  <div class="row">
   <div class="col-md-12">
   {!! $Page->text !!}
   </div>
  </div>
 </div>
</section>