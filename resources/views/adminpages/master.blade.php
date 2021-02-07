@if(!Session::has('adminem'))
	
	<script>
		location.href = "http://localhost/wlarapro12/login";
	</script>

@endif

<html>
	<head>
		<title>@yield('title')</title>
		
		<link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		
		<script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
	</head>
	
	<body>
		<main>
			<header>
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="#">WebSiteName</a>
					</div>
					<ul class="nav navbar-nav">
					  <li class="active"><a href="{{url('/admin/dashboard')}}">Home</a></li>
					  
					</ul>
					<ul class="nav navbar-nav navbar-right">
					  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome : {{Session('adminem')}}</a></li>
					  <li><a href="{{url('/admin/logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				  </div>
				</nav>
			</header>
			
			<div>
				<div class="col-sm-4">
					<ul class="list-group">
					  <li class="list-group-item"><a href="{{url('/admin/category')}}">Category</a></li>
					  <li class="list-group-item"><a href="{{url('/admin/news')}}">News</a></li>
					  
					</ul>
				</div>
				
				
				<div class="col-sm-8">
					@yield('container')
				</div>
			</div>
		</main>
	</body>
</html>