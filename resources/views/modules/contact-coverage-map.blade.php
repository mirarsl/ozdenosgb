<section class="iletisim">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <h2 class="first-header">{{$module->title}}</h2>
   </div>
   <div class="col-md-3">
    {!! $module->text !!}
   </div>
   <div class="col-md-9">
    <img src="{{asset($module->image)}}" alt="{{$module->title}}" class="img-responsive">
   </div>
  </div>
 </div>
</section>