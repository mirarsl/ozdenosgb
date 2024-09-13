<section class="afis">
 <div class="container">
  <div class="row">
   @foreach ($Page->data() as $afis)
   <div class="col-md-4 col-xs-6">
    <div class="thumbnail">
     <img loading="lazy" src="{{asset($afis->image)}}" alt="{{$afis->title}}">
    </div>
    <div class="caption">
     <a href="{{route('posters', $afis->slug)}}" class="btn btn-sm btn-primary">{{$afis->title}}</a>
    </div>
   </div>
   @endforeach
  </div>
  
  <div class="row">
   <div class="col-md-12">
    {!! $Page->text !!}
   </div>
  </div>
 </div>
</section>
@push('links')
    <style>
     .afis .thumbnail img {
      width: 100%;
      height: 180px;
      object-fit: cover;
     }
     @media (max-width: 500px) {
      .afis .thumbnail img {
       height: 100px;
      }
     }
    </style>
@endpush