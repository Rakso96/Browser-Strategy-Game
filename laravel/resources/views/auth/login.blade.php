<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Contact</title>
		
		<!-- Latest compiled and minified JavaScript for JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS for bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Latest compiled and minified JavaScript for bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<meta charset="UTF-8">
	</head>
	
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">Register</div>
						<div class="panel-body">

						@if (count($errors) > 0)
						<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							 @foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							 @endforeach

						</ul>
						</div>

						@endif

						<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">  
							
							<div class="form-group">
								<label class="col-md-4 control-label">Email: </label>
								<div class="col-md-6">
									<input type="email" class="form-control" name="email" value="{{ old('email') }}">
								</div>
							</div>
							
							<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">Login</button>
									<a href="/password/email">Forgot Your Password? </a>
								</div>
								</div>
							
						</form>
						
						
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	
</html>