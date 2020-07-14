@extends('layouts.app')
@section('content')
<div class="container">
		<div class="text--center my-5">
			{{$todo->name}}
		</div>
		<div class="card card-default">
			<div class="card-header">
				Details
			</div>
			<div class="card-body">
				{{$todo->description}}
				
			</div></div>


				
			
		
	
	<a href="/todos/{{ $todo->id}}/edit"class="btn btn-info  my5">Edit</a>
	<a href="/todos/{{ $todo->id}}/delete"class="btn btn-danger  my5">Delete</a>
	</div>
	
@endsection