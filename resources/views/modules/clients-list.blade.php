<section class="refs" style="margin-bottom: 0px;">
 <div class="container">
  <h2>Sektörel OSGB Referanslarımız</h2>
  
  <div class="row">
   @foreach ($module->data()->where('group',1) as $item)
   <div class="col-md-2 col-sm-4 col-xs-6" >
    <a href="{{route('client-categories',$item->slug)}}">
     <div  style="border: 1px solid rgb(200, 200, 200); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;background: rgba(200, 200, 200, 0.1); margin-bottom: 20px;">
      <div style="margin:10px; text-align: center;">
       <img src="{{asset($item->image)}}" class="img-center img-responsive" alt="{{$item->title}}" title="{{$item->title}}" style="display:block;margin:auto;margin-bottom: 10px; padding-left:30px; padding-right:30px;">
       <h3 style="color:black; font-size: 23px; margin-bottom: 0px; margin-top: 0px;">{{$item->title}}</h3> 
      </div>						
     </div>
    </a>
   </div>
   @endforeach
   <div class="col-md-6 col-sm-12 col-xs-12">
    <a href="{{route('client-categories','hepsi')}}">
     <div style="border: 1px solid rgb(200, 200, 200); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;background: rgba(200, 200, 200, 0.1);  margin-bottom: 20px;">
      <div style="margin:10px; text-align: center;">
       <img src="/img/refs/ref_health.png" class="img-center img-responsive" alt="Bütün OSGB Referansları" title="Bütün OSGB Referansları" style="display:block;margin:auto;margin-bottom: 10px; padding-left:30px; padding-right:30px; height:70px;">
       <h3 style="color:black; font-size: 23px; margin-bottom: 0px; margin-top: 0px;">Bütün OSGB <span style="color:black; font-size: 18px; margin-bottom: 10px; margin-top: 0px;">Referansları</span></h3> 
       <br>
      </div>						
     </div>
    </a>
   </div>
  </div>
  <br>
  <br>
  <h2>Diğer Hizmet Referanslarımız</h2>
  <br/>
  <div class="row">
   @foreach ($module->data()->where('group',2) as $item)
   <div class="col-md-6 col-sm-4 col-xs-6" >
    <a href="{{route('client-categories',$item->slug)}}">
     <div  style="border: 1px solid rgb(200, 200, 200); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;background: rgba(200, 200, 200, 0.1); margin-bottom: 20px;">
      <div style="margin:10px; text-align: center;">
       <div class="row">
        <div class="col-md-5">
         <img src="{{asset($item->image)}}" class="img-center img-responsive" alt="{{$item->title}}" title="{{$item->title}}" style="display:block;margin:auto;margin-bottom: 10px; padding-left:30px; padding-right:30px;">
        </div>
        <div class="col-md-7">
         <div style="margin-top: 30px;">
          <h3 style="color:black; font-size: 23px; margin-bottom: 0px; margin-top: 0px;">{{$item->title}} <span style="color:black; font-size: 18px; margin-bottom: 10px; margin-top: 0px;">Referansları</span></h3> 
         </div>
        </div>
       </div>
      </div>						
     </div>
    </a>
   </div>
   @endforeach

   
  </div>
 </div>
</section>