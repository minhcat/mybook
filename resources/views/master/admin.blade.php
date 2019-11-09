<!DOCTYPE html>
<html>
<head>
	@include('partials.admin.layouts.define_header')

	@yield('define-header')
</head>
<body class="hold-transition skin-{{ $admin_setting->skin }} sidebar-mini {{ ($admin_setting->sidebar == 1) ? 'sidebar-collapse' : '' }}">
	<div class="wrapper">
		@include('partials.admin.layouts.content_header')
		
		@yield('sidebar')

		@yield('content')

		@include('partials.admin.layouts.content_footer')
	</div>
	
	@include('partials.admin.layouts.define_footer')

	@yield('define-footer')

</body>
</html>