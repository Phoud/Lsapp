@if(count($errors)>0)

@foreach($errors->all() as $er)
<div class="alert alert-danger">
	{{$er}}
</div>
@endforeach
@endif

@if(session('success'))
<div class="alert alert-success">
	{{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
	{{session('error')}}
</div>
@endif