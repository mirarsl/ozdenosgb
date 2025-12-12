<section class="iletisim">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <h2 class="first-header">{{$module->title}}</h2>
   </div>
   <div class="col-md-8">
    <div class="row offices">
     <div class="col-md-12">
      <div class="breadcrumb">
       <h3>{{$sharedContent['Contact']->contact1}}</h3>
       {{$sharedContent['Contact']->address1}}
       <br/>
       <b>{{$sharedContent['Contact']->phone1}}</b>
      </div>
     </div>
    </div>
    {{-- <div class="row offices">
     <div class="col-md-12">
      <div class="breadcrumb">
       <h3>OSGB Şubelerimiz</h3>
       <div class="row kapsama-alanimiz">
        @foreach ($module->data() as $item)
        <div class="col-md-4">
         <a href="{{ $item->page ? route('coverage', $item->slug) : 'javascript:void(0)' }}" title="{{$item->title}}" class="btn btn-primary white">{{$item->code}} - {{$item->title}}</a>
        </div>
        @endforeach
       </div>
      </div>
     </div>
    </div> --}}
    <div class="row offices">
     <div class="col-md-12">
      <div class="breadcrumb">
       <h3>{{$sharedContent['Contact']->contact2}}</h3>
       {{$sharedContent['Contact']->address2}}
       <br/>
       <b>{{$sharedContent['Contact']->phone2}}</b>
      </div>
     </div>
    </div>
    <div class="breadcrumb coffee">
     <i class="fa fa-lg fa-coffee"></i> Kahvemizi içmeye bekliyoruz
    </div>
   </div>
   <div class="col-md-4">
    <div class="breadcrumb varyap">
     <img src="{{asset($module->image)}}" alt="{{$module->top}}" class="img-responsive"/>
     <p>{{$module->top}}</p>
    </div>
   </div>
  </div>
 </div>
</section>