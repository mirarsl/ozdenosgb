<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
 <ol class="carousel-indicators">
  <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
  <li data-target="#bs-carousel" data-slide-to="1"></li>
 </ol>
 <div class="carousel-inner">
  @foreach ($module->data() as $item)
  <div class="item slides {{$loop->index == 0 ? 'active':''}}">
   <div class="slide" style="background-image: url({{asset($item->image)}})"></div>
   <div class="hero">
    <h2 class="title">{!! $item->title !!}</h2>
    <h3 class="sub">{{$item->text}}</h3>
    @if (isset($item->button_title1) && isset($item->button_link1))
    <br/>
    <a href="{{$item->button_link1}}" class="btn btn-hero btn-lg" title="{{$item->button_title1}}">{{$item->button_title1}}?</a>
    @endif
   </div>
  </div>
  @endforeach
 </div> 
</div>