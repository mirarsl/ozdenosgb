<div class="container aboutus" style="margin-top: 20px;">
 <div class="row">
  <div class="col-md-4 left-side">
   <div class="thumbnail">
    <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" class="img-responsive">
   </div>
   <div class="writer-area">
    <p><i class="fa fa-calendar"></i> <b>Son Güncelleme:</b> {{\Carbon\Carbon::parse($Page->updated_at)->format('d/m/Y')}}</p>
   </div>
  </div>
  <div class="col-md-8">
   <iframe src="https://app.livechatai.com/aibot-iframe/clncw2kv30009l30f0bx7yz0q" style="border:1px solid #EAEAEA; border-radius: 4px;" width="99%" height="680" frameborder="0"></iframe>
   ></iframe>
  </div>
 </div>
</div>