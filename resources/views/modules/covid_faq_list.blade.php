@push('styles')
<style type="text/css">
 .minimal-faq .card {
  border: 0px;
 }
 .minimal-faq h3 {
  margin-top: 10px;
 }
 .minimal-faq .card .card-header {
  background: #ffffff;
  padding: 5px 0 0;
  margin-top: 0px;
 }
 .card-body {
  padding-left:30px;
  margin-bottom: 20px;
 }
 
</style>
@endpush
<section class="basindabiz">
 <div class="container">
  <div id="accordion2" role="tablist" class="minimal-faq" aria-multiselectable="true">
   @foreach ($Page->data() as $item)
   <div class="card m-b-0">
    <div class="card-header" role="tab" id="headingOne{{$loop->index}}">
     <h2 class="mb-0">
      <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne{{$loop->index}}" aria-expanded="true" aria-controls="collapseOne{{$loop->index}}">
       Soru {{$loop->index + 1}}. {{$item->title}}
      </a>
     </h2>
    </div>
    <div id="collapseOne{{$loop->index}}" class="collapse" role="tabpanel" aria-labelledby="headingOne{{$loop->index}}">
     <div class="card-body">
      {!! $item->text !!}
     </div>
    </div>
   </div>
   @endforeach

  </div>
 </div>
</section>