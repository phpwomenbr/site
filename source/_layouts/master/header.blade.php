<!DOCTYPE HTML>
<html>
	<head>
		<title>{{ $page->name }}</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="{{ $page->description}}" />
		<meta name="keywords" content="{{ $page->keywords}}" />
		<!--[if lte IE 8]><script src="{{ $page->baseUrl }}/assets/css/ie/html5shiv.js"></script><![endif]-->
		<script src="{{ $page->baseUrl }}/assets/js/jquery.min.js"></script>
		<script src="{{ $page->baseUrl }}/assets/js/jquery.dropotron.min.js"></script>
		<script src="{{ $page->baseUrl }}/assets/js/skel.min.js"></script>
		<script src="{{ $page->baseUrl }}/assets/js/skel-layers.min.js"></script>
		<script src="{{ $page->baseUrl }}/assets/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/skel.css" />
			<link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/style.css" />
			<link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">
				<!-- Logo -->
					<h1><a href="/" id="logo"><img src="/assets/images/logos/logo-150x68.png"> <em></em></a></h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="{{ empty($page->getPath()) ? 'current' : '' }}">
								<a href="/">Home</a>
							</li>
							@foreach ($menu as $item)
								<li class="{{ $item->selected($page->getPath()) }}"> 
									<a href="{{ $item->getPath() }}">{{ $item->title }}</a>
								</li>
							@endforeach
						</ul>
					</nav>

			</div>