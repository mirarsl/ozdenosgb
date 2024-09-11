<section class="basindabiz">
 <div class="container">
  <div class="grid">
   @foreach ($module->data() as $item)
   <div class="grid-item"><a href="{{asset($item->image)}}" data-fancybox="gallery" data-caption="{{$item->title}}"><img class="example-image" src="{{asset($item->image)}}" alt="{{$item->title}}"></a></div>
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
 .grid-item{
  padding: 5px;
  width: 25%;
 }
 .grid-item img{
  width: 100%;
  height: 100%;
  object-fit: cover;
 }
 @media (max-width:767px){
  .grid-item{
   width: 50%;
  }
 }
</style>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
 $(window).on('load',function(){
  Fancybox.bind("[data-fancybox]");
  $('.grid').masonry({
   itemSelector: '.grid-item',
   percentPosition: true
  })
 })
</script>
@endpush