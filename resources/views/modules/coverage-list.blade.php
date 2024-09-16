@section('modules')
@isset($Page->modules)
@forelse ($Page->modules as $module)
@if (View::exists('modules.' . $module->slug))
@include('modules.' . $module->slug, ['module' => $module])
@endif
@empty
@endforelse
@endisset
@endsection
<section class="kapsama-alanimiz">
 <div class="container">
  <div class="row">
   <div class="col-md-8 col-md-offset-2">
    <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" class="img-responsive">
   </div>
  </div>
 </div>
</section>
<section class="kapsama-alanimiz">
 <div class="container">
  @stack('coverage-modules')
  <div class="row ">
   <div class="col-md-12">
    {!! $Page->text !!}
   </div>
  </div>
 </div>
</section>