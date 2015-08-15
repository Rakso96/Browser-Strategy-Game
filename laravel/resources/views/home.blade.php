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
		<h1>HOME ONLY VISIBLE TO THE ONES LOGGED IN</h1>
		
		<!-- LOGOUT BUTTON -->
		<a href="{{ URL::to('logout') }}">Logout</a>
		
	</body>
	
</html>