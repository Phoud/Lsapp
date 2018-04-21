@extends('layouts.app')
@section('content')
<h1>{{$title}}</h1>
<p>This is a service page of laravel tutorial.</p>
@if(count($service)>0)
<ul class="list-group">
	@foreach($service as $services)
		<li class="list-group-item">{{$services}}</li>
	@endforeach
</ul>
@endif
@endsection