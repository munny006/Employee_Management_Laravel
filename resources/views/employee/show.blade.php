@extends('layout')
@section('title','show employee')
@section('content')


<div class="card mb-4">
	<div class="card-header">
		<i class="fas fa-table me-1"></i>
		Show Department
		<a href="{{ url('employee') }}" class="btn btn-info float-end btn btn-sm btn-primary">View All</a>
	</div>
	<div class="card-body">
		@if ($errors->any())
		@foreach ($errors->all() as $error)

		<p class="text-danger">{{$error}}</p>
		@endforeach
		@endif
		@if(Session::has('msg'))
		<p class="text-info">{{ session('msg') }}</p>
		@endif
		<form action="{{ url('employee/'.$data->id) }}" method="post" enctype="multipart/form-data">
			@csrf


			<table class="table table-bordered">
				<tr>
					<th>Department</th>
					<td>
						{{ $data->department->title }}
					</td>
				</tr>

				<tr>
					<th>Full Name</th>
					<td>
						{{ $data->full_name}}
					</td>
				</tr>
				<tr>
					<th>photo</th>
					<td>
						<img src="{{asset('images/'.$data->photo) }}" width="250">
					</td>
				</tr>

				<tr>
					<th>Address</th>
					<td>
						{{ $data->address}}
					</td>
				</tr>
				<tr>
					<th>Mobile</th>
					<td>
						{{ $data->mobile}}
					</td>
				</tr>
				<tr>
					<th>Status</th>
					<td>
						@if($data->status==1) Activated 
						@else DeActivated 
						@endif
						<br>
					</td>
				</td>
			</tr>


		</table>



	</div>

</div>

@endsection 
