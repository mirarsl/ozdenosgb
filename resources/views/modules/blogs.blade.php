@if (count($module->data()))
<section id="blog">
 <h2 hidden>{{$module->title}}</h2>
 <div class="container">
  <a href="{{$module->url}}" title="{{$module->top}}" class="header"><img src="{{asset($module->image)}}" alt="blog"/> {{$module->button}}</a>
  <div class="row">
   @foreach ($module->data() as $item)
   <div class="col-md-4">
    <a href="{{route('blog',$item->slug)}}" title="{{$item->title}}" class="btn btn-default">
     <div class="col-xs-3">
      <img src="{{asset($item->icon)}}" alt="{{$item->title}}" class="img-responsive">
     </div>
     <div class="col-xs-9">
      <h3 class="blog-header">{{$item->title}}</h3>
      <div class="blog-line"></div>
      <i class="fa fa-calendar"></i>&nbsp;&nbsp;{{ $item->date() }}
     </div>
    </a>
   </div>
   @endforeach
  </div>
  {!! $module->text !!}
 </div>
</section>
@endif