@extends('adminpages/master')

@section('title',"Category")


@section('container')
	<h2>Category</h2>

	@if(Session::has('status'))
				<label class="alert-info">{{Session('status')}}</label>
			@endif
	
	<table class="table">
		<tr>
			<th colspan=4 class="text-center"><a href="{{url('/admin/addcategory')}}" class="btn btn-success">Add Category</a></th>
		</tr>
		
		<tr>
			<th>S.No.</th>
			<th>CName</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		
		@php
		$sn=1;
		@endphp
		@foreach($catdata as $cd)
			<tr>
				<td>{{$sn}}</td>
				<td>{{$cd->category}}</td>
				<td><img src="{{asset('public/attach/'.$cd->image)}}" height="30" width="80"></td>
				<td><a href="{{url('/admin/editcat/'.$cd->id)}}" class="btn btn-info">Edit</a>
				<a href="{{url('/admin/delcat/'.$cd->id.'/'.$cd->image)}}" class="btn btn-danger">Delete</a></td>
			</tr>
			
		@php
		$sn++;
		@endphp
		@endforeach
	</table>
@endsection