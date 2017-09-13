<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>H1 = {{ $data4page->h1Ttle }}</h1>
	<h4>H4 = {{ $data4page->h4Ttle }}</h4>
	<p>Content = {{ $data4page->content }}</p>
	<p>Name = {{ $data4page->name }}</p>
	<p>Description 1 = {{ $data4page->desc1 }}</p>
	<p>Description 2 = {{ $data4page->desc2 }}</p>
	<img src="{{ $data4page->img1920 }}">
	<img src="{{ $data4page->img1280 }}">
	<img src="{{ $data4page->img1024 }}">
	<img src="{{ $data4page->img512 }}">
	<img src="{{ $data4page->img300 }}">
</body>
</html>
