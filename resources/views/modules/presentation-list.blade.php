<section class="basindabiz">
 <div class="container">
  <div class="row stylish-panel">
   @foreach ($Page->data() as $item)
   <div class="col-md-4">
    <div>
     <img src="{{asset($item->image)}}" alt="{{$item->title}}" class="img-circle img-thumbnail">
     <h2>{{$item->title}}</h2>
     <p>{{$item->spot}}</p>
     <a href="{{route('presentation', $item->slug)}}" class="btn btn-primary">Devamını Gör</a>
    </div>
   </div>
   @endforeach
  </div>
 </div>
</section>