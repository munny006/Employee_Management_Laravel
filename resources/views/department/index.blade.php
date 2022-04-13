@extends('layout')
@section('title','view department')
@section('content')


<div class="card mb-4">
<div class="card-header">
<i class="fas fa-table me-1"></i>
All Department
<a href="{{ url('depart/create') }}" class="btn btn-sm btn-primary float-end ">Add New</a>
</div>
<div class="card-body">
<table id="datatablesSimple">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            
        </tr>
    </thead>
  
    <tbody>
    	@if($data)
    	@foreach($data as $d)
        <tr>
        	
            <td>{{ $d->id }}</td>
            <td>{{ $d->title }}</td>
           
            
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
</div>
</div>

@endsection 
