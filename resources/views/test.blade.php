<!DOCTYPE html>
<html>
<head>
	<title>单页测试</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{URL::asset('/css/styles.css')}}">
</head>

<body>
	<header>
		<nav>
			<a href="#" title="Google"><img src="logo.png" alt="图片加载失败" onclick="location.reload()"></a>
			<ul>
				<li><a href="">Apps</a></li>
				<li><a href="#">Images</a></li>
				<li class="apps-menu">
					<a href="#">Apps</a>
					<ul class="dropdown-menu">
						<li><a href="#">Drive</a></li>
						<li><a href="#">Calendar</a></li>
						<li><a href="#">Translate</a></li>
						<li><a href="#">Photos</a></li>
						<li><a href="#">More...</a></li>
					</ul>
				</li>
                <li class="apps-menu">
                    <a href="#">test</a>
                    <ul class="dropdown-menu">
                        <li><a href="">测试1</a></li>
                        <li><a href="">测试2</a></li>
                        <li><a href="">测试3</a></li>
                        <li><a href="">测试4</a></li>
                        <li><a href="">测试5</a></li>
                    </ul>
                </li>
				<li><a href="#">Sign in</a></li>
			</ul>
		</nav>
	</header>

	<div class="search">
		<form method="get" action="https://www.google.com/search">
			<input type="text" name="q" placeholder="Search Google">
			<button type="submit">Google Search</button>
			<button type="submit">I'm Feeling Lucky</button>
		</form>
	</div>

	<footer>
		<p>© 2023 - Google</p>
		<ul>
			<li><a href="#">Advertising</a></li>
			<li><a href="#">Business</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</footer>

</body>
</html>