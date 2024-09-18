<section class="blog-index">
 <div class="container">
  <div class="row">
   @foreach ($Page->data() as $item)
   <div class="col-md-6">
    <div class="blog-box">
     <a href="{{route('blog', $item->slug)}}">
      <div class="row">
       <div class="col-xs-2">
        <img src="{{ asset($item->icon) }}" alt="{{ $item->title }}" class="img-responsive">
       </div>
       <div class="col-xs-10">
        <h2 class="first-header">{{ $item->title }}</h2>
        <p><i class="fa fa-calendar"></i> {{ $item->date('d/m/Y') }}</p>
       </div>
      </div>
     </a>
    </div>
   </div>
   @endforeach
  </div>
 </div>
</section>