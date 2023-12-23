<!DOCTYPE html>
<html lang="en-US">
	<head>
		@yield('tiny-head')

		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap -->
		@vite(['resources/css/bootstrap.min.css', 'resources/js/fontawesome-6.4.0.js'])

		<title>Elevate Your Blogging Experience with BlogForge10 | Codephics</title>

		<link rel="favicon" sizes="48x48" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/apple-touch-icon.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon-16x16.png" />

		<!-- Custom Head -->
		@yield('custom-head')

		<!-- HTML Meta Tags -->
		@include('backend.blog.skeleton.meta')
		<meta name="robots" content="noindex, nofollow">
		

		<!-- Schema -->
		@include('backend.blog.skeleton.schema')

	</head>
	<body>

		<!-- Navigation -->
		@include('backend.blog.skeleton.top-navigation')

		<!-- Content -->
		@yield('content')
		<!-- End Content -->

		<!-- Footer -->
		@include('backend.blog.skeleton.footer')

		

		<!-- Scripts -->
		@include('backend.blog.skeleton.scripts')

		<!-- Custom Scripts -->
		@yield('custom-scripts')

	</body>
</html>
