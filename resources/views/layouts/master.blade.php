<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>{{ config('blog.title') }}</title>
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<div class="text-right">
				</div>
				@yield('header')
			</div>
			@yield('content')
		</div>
	</body>
</html>
