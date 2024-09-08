<section id="ntvcanli">
 <div class="container">
  <div class="row">
   <div class="col-md-7">
    <img src="{{asset($module->image)}}" class="img-responsive ntv" alt="{{$module->top}}" title="{{$module->top}}"/>
    <br/>
    <h2>{{$module->title}}</h2>
    {!! $module->text !!}
   </div>
   <div class="col-md-5">				
    <a href="{{$module->url}}" title="{{$module->title}}"><img src="{{asset($module->image2)}}" class="img-responsive play" alt="{{$module->title}}" title="{{$module->title}}"/></a>
   </div>
  </div>
 </div>
</section>