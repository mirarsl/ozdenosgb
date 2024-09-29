<section class="basindabiz">
 <div class="container">
  <div class="row stylish-panel">
   @foreach ($module->data() as $item)
   <div class="col-md-4">
    <div>
     <img src="{{asset($item->image)}}" alt="{{$item->title}}" class="img-circle img-thumbnail">
     <h2 class="top20">{{$item->title}}</h2>
     <a href="{{route('accreditation',$item->slug)}}" title="{{$item->title}}" class="btn btn-primary">Devamını Gör</a>
    </div>
   </div>
   @endforeach
  </div>
 </div>
 <div class="container">
  <div class="row">
   {!! $Page->text !!}
  </div>
 </div>
</section>
@push('links')
    <style>
     .basindabiz img {
        max-height: 160px
     }
    </style>
@endpush