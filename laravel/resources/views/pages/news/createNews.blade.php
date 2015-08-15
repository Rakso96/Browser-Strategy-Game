<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Post News</title>
		
		@include('partials.libraries')
		
		<meta charset="UTF-8">
	</head>
	
	<body>
		<h1>Write A News Post</h1>
		
		<hr></hr>
		
		{!! Form::open(['url' => 'news']) !!}
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