<!DOCTYPE HTML>
<html>
	<head>
		<title>{{ $page->name }}</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="{{ $page->description}}" />
		<meta name="keywords" content="{{ $page->keywords}}" />
		<!--[if lte IE 8]><script src="{{ $page->baseUrl }}/assets/css/ie/html5shiv.js"></script><![endif]-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.dropotron/1.4.3/jquery.dropotron.min.js" integrity="sha512-ugEhUBPC3XfTEBbRia5d9er1tFe5N4yzwQr3xrNSTfmT09xe0fwYxgfDSLwUKCnFoFtLd5rJBZP5tdfcUzLNvw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/skel/3.0.1/skel.min.js" integrity="sha512-LpUt6fJuTMm3o0q5w8ydMXpGho2tqAoaRu6MP6Tt0X0Klct8xlToutBk7Wh51RL9n7/QSplQnrUA1U3S5YzMng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/skel/1.0.0/skel.min.js" integrity="sha512-8j5KYjx4TpOfPlo5+nqK6WX2um9gehkzzRNDcxB61RTEEgsFADi6GvrGbQdI4MzS4EjqVU7iB83GKAIpGpLzsQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/skel-layers/1.0.4/skel.min.js" integrity="sha512-8j5KYjx4TpOfPlo5+nqK6WX2um9gehkzzRNDcxB61RTEEgsFADi6GvrGbQdI4MzS4EjqVU7iB83GKAIpGpLzsQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="{{ $page->baseUrl }}/assets/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skel-layers/1.0.4/skel.min.css" integrity="sha512-drEJJ/PkSvnl6/uWviasBb+0mHp9flR9tDrn4QClvgX40pVTBh9VafywUC9usq+rA3KDmQXn8mALDOescG2yfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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