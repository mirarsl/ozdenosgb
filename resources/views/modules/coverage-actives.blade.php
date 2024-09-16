@push('coverage-modules')
<div class="row ">
 <div class="col-md-12">
  <h2 class="page-header">{{$module->title}}</h2>
  <div>{!! $module->text !!}</div>
 </div>
 @foreach ($module->data() as $item)
 <div class="col-md-4">
  <a href="{{ $item->page ? route('coverage', $item->slug) : 'javascript:void(0)' }}" title="{{$item->title}}" class="btn btn-primary">{{$item->code}} - {{$item->title}}</a>
 </div>
 @endforeach
</div>
@endpush