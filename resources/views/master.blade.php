<!DOCTYPE html>
<html>
<head>
	@include('layouts.define_header')

	@yield('define-header')
</head>
<body>
	@include('layouts.content_header')

	@yield('content')

	@include('layouts.content_footer')

	@yield('define-footer')

	@include('layouts.define_footer')
</body>
</html>