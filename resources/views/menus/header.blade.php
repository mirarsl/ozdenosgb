@php
empty($stack) ?  $stack = 0 :''
@endphp
<ul @if ($stack == 0) class="nav navbar-nav navbar-right" @else class="dropdown-menu" @endif>
	@foreach ($items as $menu_item)
	<li class="{{ count($menu_item->children) > 0 || isset($menu_item->app_model) ? 'dropdown' : '' }}">
		<a {{ count($menu_item->children) > 0 || isset($menu_item->app_model) ? 'class="dropdown-toggle"' : '' }} href='{{ !isset($menu_item->app_model) ? $menu_item->link() : (isset($menu_item->parameters) ? route('page',$menu_item->parameters->slug) : 'javascript:void(0);') }}' target="{{$menu_item->target}}">{{ $menu_item->title }} {!! count($menu_item->children) > 0 || isset($menu_item->app_model) ? '<b class="caret"></b>' : '' !!} {!! $menu_item->icon_class != null ? '<i class="'.$menu_item->icon_class.'"></i>':'' !!} </a>
		@if (count($menu_item->children) > 0 || isset($menu_item->app_model))
		@if (count($menu_item->children) > 0)
		@include('menus.header', ['items' => $menu_item->children, 'stack' => $stack + 1])
		@else
		<ul class="dropdown-menu">
			@php
			$model = app($menu_item->app_model);
			if(isset($menu_item->model_scopes) && is_string($menu_item->model_scopes)){
				foreach (json_decode($menu_item->model_scopes) as $key => $value) {
					$model = $model->$value();
				}
			}
			if(isset($menu_item->model_limit)){
				$model->limit($menu_item->model_limit,0);
			}
			@endphp
			@foreach ($model->get() as $item)
			<li><a href="{{route($menu_item->route,$item->slug)}}" target="{{$menu_item->target}}">{{$item->title}}</a></li>
			@endforeach
		</ul>
		@endif
		@endif
	</li>
	@endforeach
</ul>