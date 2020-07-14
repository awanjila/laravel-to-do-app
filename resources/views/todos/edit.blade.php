
@extends('layouts.app')
@section('content')
<div class="col-md-8">
	<div class="card card-default">
		<div class="card-header"> Edit todo</div>
		<div class="card-body">
			<h1 class="card-header text-center my-5"> edit  Todo</h1>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card-body">
						@if($errors->any())
						<div class="alert alert-danger">
							<ul class="list-group">
								@foreach($errors->all() as $error)
								<li class="list-group-item">
									{{$error}}
								</li>
								@endforeach
							</ul>
						</div>
						@endif
						<form action="/todos/{{$todo->id}}/update-todos" method="POST">
							@csrf
							
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name" name='name' value="{{$todo->name}}">
							</div>
							<div class="form-group text-center">
								<textarea  name="description" placeholder="Description" class="form-control" col="5" row="5" value="">{{$todo->description}}</textarea>

								<div class="form-group text-center">
									<button class="btn btn-success text-center">Update todo</button>
								</div>
							</div>
						</form>

					</div>

				</div>

			</div>
			
		</div>


	</div>
</div>
@endsection

