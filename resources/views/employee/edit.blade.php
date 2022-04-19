@extends('layout')
@section('title','update employee')
@section('content')


<div class="card mb-4">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Edit Department
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
		@method('put')
		@csrf
		 <table class="table table-bordered">
		 	<tr>
		 		<th>Department</th>
		 		<td>
		 			<select name="depart" class="form-control">
		 				<option value=""> -- Select Department</option>
		 				@foreach($departs as $depart)
		 				 <option @if($depart->id==$data->department_id) Selected @endif value="{{ $depart->id }}">{{ $depart->title }}</option>
		 				 @endforeach
		 				
		 			</select>
		 		</td>
		 	</tr>
		 	<tr>
		 		<th>Full Name</th>
		 		<td>
		 			<input type="text" name="full_name" class="form-control" value="{{ $data->full_name }}">
		 		</td>
		 	</tr>
		 	<tr>
		 		<th>Photo</th>
		 		<td>
		 			<input type="file" name="photo" class="form-control" >
		 			<input type="hidden" name="" value="{{ $data->photo }}">
		 		</td>
		 	</tr>

		 	<tr>
		 		<th>Address</th>
		 		<td>
		 			<input type="text" name="address" class="form-control" value="{{$data->address }}">
		 		</td>
		 	</tr>

		 	<tr>
		 		<th>Mobile</th>
		 		<td>
		 			<input type="tel" name="mobile" class="form-control" value="{{ $data->mobile }}">
		 		</td>
		 	</tr>

		 	<tr>
		 		<th>Status</th>
		 		<td>
		 			<input type="radio" name="status" value="1">
		 				Activate
		 				<br/>

		 				<input type="radio"  checked="checked"  name="status" value="0">
		 				DeActivate

		 		</td>
		 	</tr>


		 	<tr>
		 		<td colspan="2">
		 			<input type="submit" name="" value="submit" class="btn btn-dark">
		 			
		 		</td>
		 	</tr>
		 	
		 </table>
	</form>


    
</div>

</div>

@endsection 
