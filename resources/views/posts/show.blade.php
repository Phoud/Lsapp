@extends('layouts.app')
@section('content')
<h3>{{$show->title}}</h3>
<img style="width:100%;" src="/storage/cover_image/{{$show->cover_image}}">
<small>{{$show->created_at}} by {{$show->user['name']}}</small>
<hr>
<p>{!! $show->body !!}</p>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $show->user_id)
<a class="btn btn-success" href="/posts/{{$show->id}}/edit">Edit</a>
<script>
	function ConfirmDelete(){
		var x = confirm("Are you sure you want to delete?");
		if (x){
			return true;
		}else{
			return false;
		}
		}

</script>
{!!Form::open(['action' => ['PostsController@destroy', $show->id,],'onsubmit' => 'return ConfirmDelete()', 'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete',['class' => 'btn btn-danger'])}}

{!!Form::close()!!}
@endif
@endif
@endsection