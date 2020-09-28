<!DOCTYPE html>
<html lang="en">
<head>

	<title>@yield('Title', 'Doctor Dashboard')</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	@include('frontend.doctor.requires.styleLinks')

</head>
    <body>
    	<!-- Main Wrapper -->
		<div class="main-wrapper">
    	@include('frontend.doctor.requires.header')

    	<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">

				  @include('frontend.doctor.requires.sidebar')

    	          @yield('content')


    	          </div>

				</div>

			</div>		
			<!-- /Page Content -->
	

		
       @include('frontend.doctor.requires.footer')
		</div>

		@include('frontend.doctor.requires.scriptLinks')
</body>
</html>