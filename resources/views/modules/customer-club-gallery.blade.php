<section>
 <div class="container">
  <div class="row">
   @foreach ($module->data() as $item)
   <div class="col-md-6">
    <div class="thumbnail">
     <a href="{{asset($item->image)}}" data-fancybox="gallery"><img src="{{asset($item->image)}}" class="img-responsive" alt="{{$item->title}}" title="{{$item->title}}"></a>
    </div>
   </div>
   @endforeach
  </div>
 </div>
</section>
@push('links')
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<style>
 .thumbnail img{
  height: 400px !important;
  object-fit: cover;
 }
</style>
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
 Fancybox.bind("[data-fancybox]");
</script>
@endpush