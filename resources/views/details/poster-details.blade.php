@extends('pages.details')
@section('details')
<section class="afis">
 <div class="container">
  <div class="row">
   <div class="col-md-6">
    <div class="thumbnail">
     <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" loading="lazy">
    </div>
   </div>
   <div class="col-md-6">
    {!! $Page->text !!}
    <br/>
    <a href="{{asset($Page->button_link ?? $Page->image)}}" download class="btn btn-sm btn-primary" role = "button">
     <i class="fa fa-download"></i> {{$Page->button_title ?? 'İndir'}}
    </a> 
    <br/>
    <br/>
    <small>Telif haklarına tabi olan bu afişi sadece Özden OSGB müşterisiyseniz basılı olarak kullanabilirsiniz.</small>
   </div>
  </div>
 </div>
</section>
@endsection