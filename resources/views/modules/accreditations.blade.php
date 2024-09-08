@if (count($module->data()))
<section class="section-header">
 <div class="container">
  <h2>{{$module->title}}</h2>
 </div>
</section>
<section id="akreditasyon-section">
 <div class="container">
  <div class="row">
   @foreach ($module->data() as $item)
   <div class="col-md-5ths col-xs-6">
    <div class="thumbnail thumbnail-akre">
     <img class="img-responsive" src="{{asset($item->image)}}" alt="{{$item->title}}" title="{{$item->title}}"/>
     <div class="caption">
      <br/>
      <a href="{{route('accreditation',$item->slug)}}" class="akre-title">{{$item->title}}</a>
     </div>
    </div>
   </div>
   @endforeach
  </div>
 </div>
</section>
@endif