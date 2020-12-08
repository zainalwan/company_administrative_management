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
	</head>

	<body>
		<nav>
			<ul>
				<li><a href="/">LIPSUM</a></li>
				<li>
					<a href="/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" xmlns="http://www.w3.org/2000/svg">
						<path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
						<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
					</svg></a>
					<a href="/">Home</a>
				</li>
				<li>
					<a href="/event"><svg width="1em" height="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
						<path fill-rule="evenodd" d="M12 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg></a>
					<a href="/event">Event</a>
				</li>
				<li>
					<a href="/announcements"><svg width="1em" height="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
						<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
					</svg></a>
					<a href="/announcement">Announcement</a>
				</li>
				<li>
					<a href="/employee"><svg width="1em" height="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
					</svg></a>
					<a href="/employee">Employee</a>
				</li>
				<li>
					<a href="/account"><svg width="1em" height="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg></a>
					<a href="/account">Account</a>
				</li>
				<li>
					<a href="/log_out"><svg width="1em" height="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
					</svg></a>
					<a href="/log_out">Log out</a>
				</li>
			</ul>
		</nav>

		<div class="container">
			@yield('content')
		</div>
		
		<div class="footer">
			<p>Copyright 2020 Zain Alwan Wima Irfani</p>
		</div>
	</body>
</html>
