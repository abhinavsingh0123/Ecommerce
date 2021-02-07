@extends('adminpages/master')

@section('title',"News")


@section('container')

	


	<h2>News</h2>

	@if(Session::has('status'))
				<label class="alert-info">{{Session('status')}}</label>
			@endif
	
	<table class="table">
		<tr>
			<th colspan=5 class="text-center"><a href="{{url('/admin/addnews')}}" class="btn btn-success">Add News</a></th>
		</tr>
		
		<tr>
			<th>S.No.</th>
			<th>Category</th>
			<th>Title</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		
		
	</table>
@endsection