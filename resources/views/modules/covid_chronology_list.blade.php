<section class="kapsama-alanimiz">
 <div class="container">
  <br>
  <br>
  
  @foreach ($Page->data() as $item)
  <div class="row tarihce">
   <div class="col-md-3">
    <b>{{ \Carbon\Carbon::parse($item->created_at)->locale('tr')->isoFormat('D MMMM dddd') }}</b>
   </div>
   <div class="col-md-5">
    {!! $item->text !!}
   </div>
   <div class="col-md-4">
    {!! $item->getType() !!}
   </div>
  </div>
  @if (!$loop->last)
  <hr style="margin-top: 0px;">
  @endif
  @endforeach
 </section>