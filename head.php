<html>

<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<LINK href='ico.gif' rel='shortcut icon'>
	<title>Чудеса Татарстана</title>
	<script src="jquery-3.5.1.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var touch = $('#touch-menu');
			var menu = $('.nav');
			var shdw = $('.backdrop');

			$(touch).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function() {
				var wid = $(window).width();
				if (wid > 760 && menu.is(':hidden')) {
					menu.removeAttr('style');
				}
			});
		});
		jQuery(document).ready(function($) {
			$('.icon-menu').click(function(event) {
				$('.sidebar').toggleClass('active');
			});
		});
	</script>
</head>

<body>
	<div id="wrapper">
		<div class="header">
			<div class="icon-menu">
				<span class="divide"></span>
				<span class="divide"></span>
				<span class="divide"></span>
			</div>
			<div class="logo">
				<a href="index.php"><img src="logo.png" class="logo" alt="" srcset=""></a>

			</div>
			<div class="container">
				<a href="#" id="touch-menu">меню</a>
				<nav>
					<ul class="nav clearfix">

						<li><a href="maps.php">Местоположение чудес</a></li>
						<li><a href="source.php">Источники</a></li>
						<li><a href="index.php">Главная страница</a></li>
					</ul>
				</nav>
			</div>
			<div class="backdrop"></div>
		</div>
	</div>
	<div class="slider">
		<img src="slider.png" class="lala" alt="" srcset="">
		<h1 class="in-logo">ЧУДЕСА ТАТАРСТАНА</h1>
		<div class="in-logo">

		</div>
	</div>