<!DOCTYPE html>
<html lang="en">
<head>
	@include('frontend.include.header')
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		@include('frontend.include.body_header')
		@yield('content')
		@include('frontend.include.body_footer')
	</div>
	@include('frontend.include.footer')
</body>

</html>