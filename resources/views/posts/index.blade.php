@extends('layouts.app')
@section('content')
	<h1>Posts</h1>

	@if(count($posts)>0)
		@foreach($posts as $p)
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<img style="width:100%;" src="/storage/cover_image/{{$p->cover_image}}">
				</div>
				<div class="col-md-8 col-sm-8">
					<h3><a href="/posts/{{$p->id}}">{{$p->title}}</a></h3>
					<small>Written on {{$p->created_at}} by {{ $p->user['name'] }}</small>
				</div>
			</div>
			
			</div> 
		@endforeach

		{{$posts->links()}}
	@else
		<p>Not post found</p>
	@endif
@endsection