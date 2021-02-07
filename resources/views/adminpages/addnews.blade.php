@extends('adminpages/master')

@section('title',"Add News")


@section('container')
	<h2>Add News</h2>
	
	@if($errors->any())
		<label class="text-danger">
			@foreach($errors->all() as $err)
				{{$err}}
				<br>			
			@endforeach
	</label>
	@endif

	
	
	{!! Form::open(array('url'=>'/admin/postaddnews','enctype'=>'multipart/form-data')) !!}
			
				<div class="form-group">
					{{Form::label('Category Name')}}
					
					<select name="category" class="form-control">
							<option value="" hidden>Select</option>
							@foreach($catdata as $cd)
								<option>{{$cd->category}}</option>
							@endforeach
					</select>
				</div>
				
				
				<div class="form-group">
					{{Form::label('News Title')}}
					{{Form::text('title','',['class'=>'form-control'])}}
					
					
				</div>
				
				
				<div class="form-group">
					{{Form::label('Description')}}
					{{Form::textarea('desc','',['class'=>'form-control'])}}
					
					
				</div>
				
				<div class="form-group">
					{{Form::label('Image')}}
					{{Form::file('att',['class'=>'form-control'])}}
					
				
				</div>
				
				<div class="form-group">
					{{Form::submit('Submit',['class'=>'btn btn-success'])}}
				</div>
				
			{!! Form::close() !!}
@endsection