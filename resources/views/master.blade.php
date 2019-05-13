<!DOCTYPE html>
<html>
<head>
	@include('partials.layouts.define_header')

	@yield('define-header')
</head>
<body>
	@include('partials.layouts.content_header')

	@yield('content')

	@include('partials.layouts.content_footer')

	@yield('define-footer')

	@include('partials.layouts.define_footer')
</body>
</html>