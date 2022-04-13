@extends('layout')
@section('title','show department')
@section('content')


<div class="card mb-4">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Show Department
<a href="{{ url('depart') }}" class="btn btn-info float-end btn btn-sm btn-primary">View All</a>
</div>
<div class="card-body">
	
	
		 <table class="table table-bordered">
		 	<tr>
		 		<th>Title</th>
		 		<td>
		 			{{ $data->title }}
		 		</td>
		 	</tr>

		 	
		 	
		 </table>
	

    
</div>

</div>

@endsection 
