@extends('frontpages/master')



@section('title',"Digital News")




@section('container')

<style>
	table,th,td{border:1px solid black; text-align:center;}
	table{width:100%}
</style>

<h1>Cart Details</h1>



		<table>
			@if(count($myitems)>0)
				<tr>
					<th>S.No.</th>
					<th>Product Name</th>
					<th>Image</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total Price</th>
					<th>Delete</th>
				</tr>
				
				@php
				$sn=1;
				@endphp
				
				@foreach($myitems as $item)
					<tr>
						<th>{{$sn}}</th>
						<th>{{$item->name}}</th>
						<th><img src="{{asset('public/attach/'.$item->image)}}" height="80" width="40"></th>
						<th>Rs <?=$item->price?></th>
						<th>- <?=$item->quantity ?> +</th>
						<th>Rs <?=$item->price * $item->quantity?></th>
						<th><a href="{{url('/delcart/'.$item->id)}}">Del</a></th>
					</tr>
					
					@php
					$sn++;
					@endphp
				@endforeach
				
				
				<tr>
					<th colspan=5>Grand Total</th>
					<th>Rs <?=$gt?></th>
				</tr>
			@else
				<tr>
					<th>No Items In Your Cart</th>
				</tr>
			@endif
		
		</table>
				





@endsection