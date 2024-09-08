<section class="musteri-klubu">
 <div class="container">
  <div class="row">
   <div class="col-lg-2">
    <img src="{{asset($module->image)}}" class="img-responsive img-circle" alt="{{$module->top}}" title="{{$module->top}}"/>
   </div>
   <div class="col-lg-10">
    <div class="musteri-klubu-text">
     <h2 class="testi-header">{{$module->title}}</h2>
     {!! $module->text !!}
     <a href="{{$module->url}}">{{$module->button}}</a>
    </div>
   </div>
  </div>
 </div>
</section>