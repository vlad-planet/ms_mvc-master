<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<title>Microservices</title>
		
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
		
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {
			
			return Math.floor( Math.random()*(number+1) );
		};
		
		// show random quote
		$(document).ready(function() { 

			var quotes = $('.quote');
			quotes.hide();
			
			var qlen = quotes.length; //document.write( random(qlen-1) );
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
		});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo"></div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/services">Сервисы</a></li>
						<li><a href="/components">Компоненты</a></li>
						<li class="last"><a href="/tests">Тэстирование</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Свойсьва Микросервисов</h3>
						<p align="justify" class="quote">
						Модули можно легко заменить в любое время: акцент на простоту, независимость развёртывания и обновления каждого из микросервисов;
						</p>
						<p align="justify" class="quote">
						Модули организованы вокруг функций: микросервис по возможности выполняет только одну достаточно элементарную функцию;
						</p>
						<p align="justify" class="quote">
						Модули могут быть реализованы с использованием различных языков программирования, фреймворков, связующего программного обеспечения.						</p>
						<p align="justify" class="quote">
						Модули выполняться в различных средах контейнеризации, виртуализации, под управлением различных операционных систем на различных архитектурах:
						</p>
					</div>
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/">Главная</a></li>
							<li><a href="/services">Сервисы</a></li>
						<li><a href="/components">Компоненты</a></li>
						<li class="last"><a href="/tests">Тэстирование</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Наши контакты</h3>
					<ul class="list">
						<li class="first">+7(777)777-77-77</li>
						<li>skypeid: microservices</li>
						<li class="last">email: microservices@gmail.com</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>О Микросервисах</h3>
					<p>
						Микросервисная архитектура — вариант сервис-ориентированной архитектуры программного обеспечения, 
						направленный на взаимодействие насколько это возможно небольших, слабо связанных и легко изменяемых модулей — микросервисов,
						получивший распространение в середине 2010-х годов в связи с развитием практик гибкой разработки и DevOps.
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/"> Microservice </a> &copy; 2022</a>
		</div>
	</body>
</html>