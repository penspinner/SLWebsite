@include('old/includes/session')
@include('old/includes/functions')
<html>
	@include('old/includes/layouts/head')
	<body>
		@include('old/includes/layouts/header')
		@yield('content')
		@include('old/includes/layouts/footer')
	</body>
</html>