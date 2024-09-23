<section class="afis">
    <div class="container">
        <div class="grid">
            @foreach ($Page->data() as $afis)
            <div class="grid-item">
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
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<style>
    .grid-item{
        padding: 5px;
        width: 33%;
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