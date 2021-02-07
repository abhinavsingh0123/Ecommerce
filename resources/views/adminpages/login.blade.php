<html>
	<head>
		<title>Admin Panel</title>
		
		<link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		
		<script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
	</head>


	<body>
		<main>
			<header class="jumbotron"><h1 class="text-center">Admin panel</h1></header>
			
			
			<section class="container">
			
			@if(Session::has('status'))
				<label class="alert-danger">{{Session('status')}}</label>
			@endif
			
			{!! Form::open(array('url'=>'/admin/postlogin')) !!}
			
				<div class="form-group">
					{{Form::label('Email')}}
					{{Form::text('em','',['class'=>'form-control'])}}
				</div>
				
				<div class="form-group">
					{{Form::label('Password')}}
					{{Form::password('pass',['class'=>'form-control'])}}
				</div>
				
				<div class="form-group">
					{{Form::submit('Login',['class'=>'btn btn-success'])}}
				</div>
				
			{!! Form::close() !!}
			</section>
		</main>
	</body>
</html>