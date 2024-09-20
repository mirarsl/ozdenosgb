<section id="services">
 <div class="container">
  <div class="row">
   <div class="col-lg-12 text-center">
    <h2 class="section-heading">{!! $module->title !!}</h2>
   </div>
  </div>
  <div class="row text-center hizmet-row ref-panel">
   @foreach ($module->data() as $item)
   <div class="col-md-4 col-sm-6">
    <div>
     <img src="{{asset($item->image)}}" class="img-responsive" alt="{{$item->title}}" title="{{$item->title}}"/>
     <h3>{{$item->title}}</h3>
     <p class="text-muted">{{$item->spot}}</p>
     <a class="btn btn-sm btn-primary" href="{{route('service',$item->fullSlug())}}">{{$item->title}}</a>
    </div>
   </div>
   @endforeach
  </div>
 </div>
</section>
@push('links')
    <style>
     #services .ref-panel > div > div{
        min-height: 320px;
     }
    </style>
@endpush