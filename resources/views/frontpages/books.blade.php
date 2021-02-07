@extends('frontpages/master')



@section('title',"Digital News")



@section('container')





	<h1>Books</h1>

	@foreach($bookdata as $bd)
	

		<div style="display:inline-block; margin:20px;">
			<div style="text-align:center"><img src="{{asset('public/attach/'.$bd->image)}}"></div>	
			<div style="text-align:center">{{$bd->name}}</div>
			<div style="text-align:center">{{$bd->price}}</div>
			
			<input type="hidden" value="1" class="bquan">
			<div style="text-align:center">
			<input type="button" class="addcart" value="Add Cart" bid="{{$bd->id}}" bname="{{$bd->name}}" bprice="{{$bd->price}}" bimage="{{$bd->image}}"></div>
		</div>
	
	@endforeach

@endsection