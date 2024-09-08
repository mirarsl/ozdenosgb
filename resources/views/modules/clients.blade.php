@if (count($module->data()))
<h2 hidden>{{$module->title}}</h2>
<div class="owl-carousel clients">
 @foreach ($module->data() as $item)
 <img src="{{asset($item->image)}}" class="grayscale" alt="{{$item->title}}" title="{{$item->title}}"/>
 @endforeach
</div>
@endif