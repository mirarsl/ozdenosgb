<div class="row align-center">
 <div class="col-md-8">
  <div class="row stylish-panel">
   @foreach ($data as $item)
   <div class="col-md-4">
    <div>
     <img src="{{asset($item->image)}}" alt="{{$item->title}}" class="img-circle img-thumbnail">
     <h2>{{$item->title}}</h2>
     <a href="{{route('service',$item->fullSlug())}}" class="btn btn-primary">Hesapla</a>
    </div>
   </div>
   @endforeach
  </div>
 </div>
</div>