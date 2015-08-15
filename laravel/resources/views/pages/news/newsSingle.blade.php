<!DOCTYPE html>
<html lang="en">

	<head>
		<title>{{ $article->title }}</title>
		
		@include('partials.libraries')
		
		<meta charset="UTF-8">
	</head>
	
	<body>
		<h1>{{ $article->title }}</h1>
		<article>
			{{ $article->body }}
		</article>
	</body>
	
</html>