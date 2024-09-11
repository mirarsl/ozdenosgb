<div class="container aboutus">
 <div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12 center767">
   <h2 class="text-center">{{$Page->title}}</h2>
   
   {!! $Page->data()->first()->about !!}
  </div>
  
  <div class="col-md-6 col-sm-12 col-xs-12">
   <h2 class="text-center">Farkımız</h2>
   {!! $Page->data()->first()->quality !!}
   
  </div>
 </div>
</div>