

<!------ Include the above in your HEAD tag ---------->

<html>
<head>
    <title>App Name - @yield('title')</title>

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
	
    <link href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="/css/all.css">


	@yield('custom_css')
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>
