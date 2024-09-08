<section id="teklif-section">
 <div class="container">
  <div class="teklif-iste row">
   <div class="col-sm-2">
    <img src="{{asset($module->image)}}" class="img-responsive" alt="{{$module->top}}" title="{{$module->top}}"/>
   </div>
   <div class="col-sm-5" id="column-content">
    {!! $module->title !!}
   </div>
   <div class="col-sm-5">
    <a href="{{$module->url}}" class="btn btn-lg btn-success cm-btn">{{$module->button}}</a>
   </div>
  </div>
 </div>
</section>