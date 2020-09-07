<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <!-- title page -->
	<title>@yield('title', 'Admin')</title>

	<!-- including css -->
	@include('admin.requires.stylelinks')


</head>
<body>
      <div class="main-wrapper">

      	<!-- including header -->
      	@include('admin.requires.header')

      	<!-- including sidebar -->
      	@include('admin.requires.sidenav')


      	@yield('content')

      	<!-- including footer -->
      	@include('admin.requires.footer')

      </div>

      <!--including Javascript links -->
      @include('admin.requires.scriptlinks')

      
</body>
</html>