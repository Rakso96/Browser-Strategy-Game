<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Contact</title>
		
		@include('partials.libraries')
		
		<meta charset="UTF-8">
	</head>
	
	<body>
		<h1>Edit: {!! $article->title !!}</h1>
		
		{!! Form::model($article, ['method' => 'PATCH', 'url' => 'news/' . $article->id]) !!}
			<div class="form-group">
				{!! Form::label('title', 'Title: ') !!}
				{!! Form::text('title', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('body', 'Body: ') !!}
				{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
					{!! Form::submit('Submit News Article', ['class' => 'btn btn-primary form-control']) !!}
			</div>
		{!! Form::close() !!}
		
		@include('errors.formError')
	</body>
	
</html>