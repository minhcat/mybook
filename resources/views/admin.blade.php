<!DOCTYPE html>
<html>
<head>
	@include('partials.admin.layouts.define_header')

	@yield('define-header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		@include('partials.admin.layouts.content_header')

		@include('partials.admin.aside.uploader')

		@yield('content')

		@include('partials.admin.layouts.content_footer')
	</div>

	@yield('define-footer')

	@include('partials.admin.layouts.define_footer')
</body>
</html>