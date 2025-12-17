@extends('layout.master')
@section('content')
<h1 hidden><?=$Page->hero?></h1>
@foreach ($Page->modules as $module)
@if (View::exists('modules.' . $module->slug))
@include('modules.' . $module->slug, ['module' => $module])
@else
{{-- @include('modules.default', ['module' => $module]) --}}
@endif
@endforeach

@endsection
@push('page_codes')
{!! $Page->page_codes !!}
@endpush
