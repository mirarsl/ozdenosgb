<section id="kapsama-alanimiz">
 <h2 hidden>{{$module->title}}</h2>
 <div class="container">
  <a href="{{$module->url}}" title="{{$module->button}}" class="header">{{$module->title}}</a>
  <div class="row">
   <div class="col-md-10 col-md-offset-1">
    <img src="{{asset($module->image)}}" alt="{{$module->title}}" class="img-responsive">
   </div>
  </div>
  {!! $module->text !!}
 </div>
</section>