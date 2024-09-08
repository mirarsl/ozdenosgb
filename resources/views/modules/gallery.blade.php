@if (count($module->data()))
<section id="blog" class="gallery">
 <div class="container">
  <h2 hidden>{{$module->title}}</h2>
  <a href="{{$module->url}}" title="{{$module->button}}" class="header">{{$module->title}}</a>
  <div class="row">
   @foreach ($module->data() as $item)
   <div class="col-md-2">
    <div class="thumbnail">				
     <a href="{{asset($item->image)}}" data-lightbox="fotoset" title="{{$item->title}}"><img class="example-image" src="{{asset($item->image)}}" alt="{{$item->title}}"></a>
    </div>
   </div>
   @endforeach
  </div>
  {!! $module->text !!}
 </div>
</section>
@endif