<!DOCTYPE html>

<!-- 
	 Code that written below is belong to Zain Alwan Wima Irfani. You may
	 not use, share, modify, and study without the author's permission
	 (zainalwan4@gmail.com).
-->
<html>
	<head>
		<title>{{ $title }}</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Zain Alwan Wima Irfani">
		<meta name="description" content="Company administrative management web app.">
        <link rel="stylesheet" href="/assets/css/app.css">
	</head>

	<body>
		<div class="container-separate">
			<div class="hero">
				<h1>LIPSUM</h1>
			</div>
			<div class="container-inner">
				@yield('content')
			</div>
		</div>

		<div class="footer separate">
			<p>Copyright 2020 Zain Alwan Wima Irfani</p>
		</div>

        <script src="/assets/js/script.js"></script>
	</body>
</html>
