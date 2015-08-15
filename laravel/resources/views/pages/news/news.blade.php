<!DOCTYPE html>
<html lang="en">

	<head>
		<title>News</title>
		
		@include('partials.libraries')
		
		<meta charset="UTF-8">
	</head>
	
	<body>
		<h1>News</h1>
		
		@foreach ($articles as $article)
			<article>
				<h2><a href="/news/{{$article->id}}">{{ $article->title }}</a></h2>
				
				<div class="body">
					{{ $article->body }}
				</div>
			</article>
		@endforeach
	</body>
	
</html>