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
	
	<script type="text/javascript">
		var flag_url = '{{ asset('/') }}';
		@if (Auth::check())
		var auth_id  = '{{ Auth::id() }}';
		@endif
	</script>
	
	@include('partials.admin.layouts.define_footer')

	@yield('define-footer')
	
</body>
</html>