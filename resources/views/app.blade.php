<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Product Management')</title>
	@yield('custom-css')
</head>
<body>
	@include('partials.navbar')
	<div class="container">
		@yield('content')
	</div>
	@include('partials.footer')
</body>
</html>