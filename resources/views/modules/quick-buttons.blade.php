@if (count($module->data()))
<h2 hidden>{{$module->title}}</h2>
<section id="tehlike-sinifi">
 <div class="container">
  <div class="row">
   @foreach ($module->data() as $item)
   <div class="col-md-3"> 
    <a href="{{$item->url}}" class="btn btn-lg box" title="{{$item->title}}" style="background-color:{{$item->color}}">
     <div class="row">
      <div class="col-xs-3 hesap-img">
       <img src="{{asset($item->icon)}}" alt="{{$item->title}}" class="img-responsive">
      </div>
      <div class="col-xs-9">
       <h3>{{$item->title}}</h3>
      </div>
     </div>
    </a>
   </div>
   @endforeach
  </div>
 </div>
</section>
@endif
