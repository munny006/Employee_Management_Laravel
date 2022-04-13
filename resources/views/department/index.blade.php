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
    @if ($errors->any())
      @foreach ($errors->all() as $error)
              
    <p class="text-danger">{{$error}}</p>
    @endforeach
    @endif
    @if(Session::has('msg'))
    <p class="text-info">{{ session('msg') }}</p>
    @endif
<table id="datatablesSimple">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
             <th>Action</th>
            
        </tr>
    </thead>
  
    <tbody>
    	@if($data)
    	@foreach($data as $d)
        <tr>
        	
            <td>{{ $d->id }}</td>
            <td>{{ $d->title }}</td>
            <td>
                 <a href="{{url('depart/' .$d->id) }}" class="btn btn-info">Show</a>
                <a href="{{url('depart/' .$d->id . '/edit') }}" class="btn btn-warning">Update</a>
                <a href="{{url('depart/' .$d->id . '/delete') }}" class="btn btn-danger" onclick="return confirm('are u sure delete this data ??')">Delete</a>
            </td>
           
            
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
</div>
</div>

@endsection 
