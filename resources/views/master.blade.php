<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-theme.css">
	<script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.js"></script>
	<!-- end bootstrap -->

	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
	<!-- end font awesome -->

	<!-- slick -->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css">
	<!-- end slick -->

	<title>My Book</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="image/icon.png">
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/common.js"></script>

	@yield('define-header')
</head>
<body>
	@include('pages.content_header')

	@yield('content')

	@include('pages.content_footer')
</body>
</html>