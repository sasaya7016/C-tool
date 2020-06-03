<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ '/css/top.css' }}">
		<!-- <link rel="stylesheet" href="{{ '/css/blog.css' }}"> -->

		<title>C-tool</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>

<body>
		<div class="flex-center position-ref full-height">
				<div class="top-github">
						<a href="https://github.com/sasaya7016/C-tool">GitHub</a>
				</div>
	
				<div class="content">
						<div class="title m-b-md">
								C-tool
						</div>
				</div>
		</div>


		<div id="main_content">
				<div id="main_content_left">

				</div>
				<div id="main_content_right">
						<ul class="main_content_list">
								<li><a href="{{ url('post/blog') }}">BLOG</a></li>
								<!-- <li><a href="{{ url('post/blog') }}">CONTACT</a></li> -->
								<li></li>
						</ul>
				</div>
		</div>
		<footer>
				<div id="footer_inner" class="cf">
				</div>
		</footer>
</body>
</html>
