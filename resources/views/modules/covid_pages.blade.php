<section class="basindabiz">
 <div class="container">
  <div class="row stylish-panel" style="justify-content: center;display: flex;">
   @foreach ($Page->pages as $page)
   <div class="col-md-4">
    <div  style="margin-top: 0px;">
     <img src="{{asset($page->image)}}" alt="{{$page->title}}" class="img-circle img-thumbnail">
     <h2>{{$page->title}}</h2>
     <p>{{$page->meta_desc}}</p>
     <a href="{{route('page',$page->fullSlug())}}" class="btn btn-primary">Git</a>
    </div>
   </div>
   @endforeach
  </div>
 </div>
</section>