@extends('layout')
@section('title','edit department')
@section('content')


<div class="card mb-4">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Edit Department
<a href="{{ url('depart') }}" class="btn btn-info float-end btn btn-sm btn-primary">View All</a>
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
	<form action="{{ url('depart/'.$data->id) }}" method="post">
		@method('put')
		@csrf
		 <table class="table table-bordered">
		 	<tr>
		 		<th>Title</th>
		 		<td>
		 			<input type="text" name="title" class="form-control" value="{{ $data->title }}">
		 		</td>
		 	</tr>

		 	<tr>
		 		<td colspan="2">
		 			<input type="submit" name="" value="Update" class="btn btn-success">
		 			
		 		</td>
		 	</tr>
		 	
		 </table>
	</form>

    
</div>

</div>

@endsection 
