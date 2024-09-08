<section class="batiatasehir">
 <div class="container">
  <div class="row">
   <div class="col-md-8">
    <h2 class="white">{{$module->title}}</h2>
    {!! $module->text !!}
   </div>
   <div class="col-md-4">				
    <img src="{{asset($module->image)}}" class="img-responsive" alt="{{$module->button}}" title="{{$module->button}}"/>
   </div>
  </div>
 </div>
</section>