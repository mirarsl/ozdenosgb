@extends('pages.details')
@section('details')
<section class="afis">
 <div class="container">
  <div class="row">
   <div class="col-md-4">
    @if (isset($Page->gallery))
    @foreach (json_decode($Page->gallery) as $item)
    <div class="col-md-12">
     <a href="{{asset($item)}}" data-fancybox="gallery" data-title="{{$Page->title}}">
      <img src="{{asset($item)}}" class="img-responsive" alt="{{$Page->title}}">
     </a>
    </div>
    @endforeach
    @else
    <div class="col-md-12">
     <a href="{{asset($Page->image)}}" data-fancybox="gallery" data-title="{{$Page->title}}">
      <img src="{{asset($Page->image)}}" class="img-responsive" alt="{{$Page->title}}">
     </a>
    </div>
    @endif
   </div>
   <div class="col-md-8">
    <div class="col-md-12">
     {!! $Page->text !!}
     <br/>
     @if ($Page->button_title && $Page->button_link)
     <a href="{{$Page->button_link}}" target="_blank" class="btn btn-sm btn-primary" role="button">
      <i class="fa fa-download"></i> {{$Page->button_title}}
     </a> 
     @endif
    </div>
   </div>
  </div>
 </div>
</section>
@endsection
@push('links')
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
 $(window).on('load',function(){
  Fancybox.bind("[data-fancybox]");
 })
</script>
@endpush