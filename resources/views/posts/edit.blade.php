@extends('layouts.app')
@section('content')
<h1>Edit Post</h1>

{!! Form::open(['action' => ['PostsController@update', $edit->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
<div class="form-group">
{{ Form::label('title','Title') }}
{{ Form::text('title', $edit->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
</div>

<div class="form-group">
{{ Form::label('title','Body') }}
{{ Form::textarea('body', $edit->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
</div>
{{Form::hidden('_method', 'PUT')}}
<div class="form-group">
	{{Form::file('cover_image')}}
</div>
{{Form::submit('Update', ['class' => 'btn btn-primary btn-lg'])}}
{!! Form::close() !!}

@endsection