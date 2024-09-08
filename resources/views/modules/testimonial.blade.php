@if (count($module->data()))
<section class="testimonials">
 <div class="container">
  <div class="row">
   <div class="col-lg-12">
    <h2 class="testi-header">{{$module->title}}</h2>
    {!! $module->text !!}
   </div>
  </div>
  <div class="row">
   @foreach ($module->data() as $item)
   <div class="col-lg-4">
    <img src="{{asset($item->logo)}}" class="img-responsive img-circle testi-img" alt="{{$item->firm}} bizim için ne diyor?" title="{{$item->firm}} bizim için ne diyor?"/>
    <blockquote>
     <i class="fa fa-2x fa-quote-left quote" aria-hidden="true"></i>  
     <p>{{$item->text}}</p>
     <br/>
     <br/>
     <b>{{$item->name}}</b>
     <br/>
     <small>{{$item->title}}</small>
     <br/>
     <b class="testi-company">{{$item->firm}}</b>
    </blockquote>
   </div>
   @endforeach
  </div>
 </section>
 @endif