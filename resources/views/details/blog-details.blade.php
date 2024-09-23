@extends('pages.details')
@section('details')
<section class="blog">
 <div class="container">
  <div class="row">
   <div class="col-md-4 left-side">
    @if($Page->image != null)
    <div class="thumbnail">
     <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" class="img-responsive">
    </div>
    @endif
    <div class="writer-area">
     @if($Page->author != null)
     <p><i class="fa fa-user"></i> <b>Yazan:</b> {{$Page->author}}</p>
     @endif
     <p><i class="fa fa-calendar"></i> <b>Tarih:</b> {{$Page->date('d/m/Y')}}</p>
    </div>
   </div>
   <div class="{{$Page->image != null ? 'col-md-8' : 'col-md-12'}}">
    {!! $Page->text !!}
    
    @if ($Page->questions != null)
    @php
    $z = json_decode($Page->questions);
    @endphp
    @foreach ($z->q as $key=>$value)
    <h2><?=$key+1?>. <?=$value ?></h2>
    <div class="row">
     <div class="col-md-4">
      <div style="margin-bottom: 20px;">
       <label>
        <input type="radio" name="key_{{$key}}" value="{{$z->r[$key] == 'Evet' ? 'yes' : ''}}">
        <img src="/img/blog/icon/evet.jpg">
       </label>
       <label>
        <input type="radio" name="key_{{$key}}" value="{{$z->r[$key] == 'Hayır' ? 'yes' : ''}}">
        <img src="/img/blog/icon/hayir.jpg">
       </label>
       @if ($z->t[$key] == 3)
       <label>
        <input type="radio" name="key_{{$key}}" value="{{$z->r[$key] == 'Evet' ? 'yes' : ''}}">
        <img src="/img/blog/icon/evdencalisma.jpg">
       </label>
       @endif
      </div>
     </div>
     <div class="col-md-8">
     </div>
    </div>
    @endforeach
    <br>
    <a class="btn btn-info" style="" href="javascript:sonuclari_gor();">Sonuçları Gör</a>
    
    <div id="score_area" style="display: none;">
     <br>
     <br>
     <br>
     <br>
     <h4>{{$Page->question_title}}: <span id="score"></span> / 100</h4>
     <div class="row">
      <div class="col-md-4">
       <img id="up" style="display: none;" src="{{asset($Page->question_up)}}">
       <img id="down" style="display: none;" src="{{asset($Page->question_down)}}">
      </div>
     </div>
    </div>
    @endif
   </div>
  </div>
 </div>
</section>
@endsection
@if ($Page->questions != null)
@push('links')
<style type="text/css">
 h2{
  border:0px !important;
  margin-top: 0px;
  margin-bottom: 10px;
 }
 [type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
 }
 
 /* IMAGE STYLES */
 [type=radio] + img {
  cursor: pointer;
 }
 
 /* CHECKED STYLES */
 [type=radio]:checked + img {
  outline: 2px solid #333;
 }
</style>
@endpush
@push('scripts')
<script>
 $(document).ready(function () {
  $('input:radio').change(function () {
   $("#up").hide();
   $("#down").hide();
   if($('input:radio:checked').length == {{count($z->q)}}) {
    $("#score_area").show();
    score = $('input:radio[value=yes]:checked').length * 100 / {{count($z->q)}};
    $("#score").html(score.toFixed(0));
    
    if(score >= 85) {
     $("#up").show();
    }
    else {
     $("#down").show();
    }
    
    window.location.hash = '#score_area';
   }
  });
 });
 function sonuclari_gor() {
  $("#up").hide();
  $("#down").hide();
  
  $("#score_area").show();
  score = $('input:radio[value=yes]:checked').length * 100 / {{count($z->q)}};
  $("#score").html(score.toFixed(0));
  
  if(score >= 85) {
   $("#up").show();
  }
  else {
   $("#down").show();
  }
  
  window.location.hash = '#score_area';
 }
</script>
@endpush
@endif