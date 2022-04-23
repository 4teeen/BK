<!DOCTYPE html>
<html>
<head>
<?php
	$title = "Фильмы" ;
	require_once "assets/blocks/head.php";
	?>
</head>
<body>
	<div class="main">
		<?php require_once "assets/blocks/header.php" ?>
	</div>
	<div class="side_content">
		<?php require_once "assets/blocks/rightCol.php"?>
		</div>
		<div class="content">
			<div class="info_film">
				<img src="assets/img/inter.png">
				<h1>Интерстеллер</h1>
				Режиссер: Кристофер Нолан<br>
				Год выпуска: 2014<br>
				Рейтинг: 8.1/10<br>
				<div class="button"><a href="show.php">Смотреть</a></div>
			</div>
			<div class="info_film">
				<img src="assets/img/max.png">
				<h1>Безумный Макус</h1>
				Режиссер: Джордж Миллер<br>
				Год выпуска: 2015<br>
				Рейтинг: 7.5/10<br>
				<div class="button"><a href="#">Смотреть</a></div>
			</div>
			<div class="info_film">
				<img src="assets/img/matrix.png">
				Когда засуха, пыльные бури и вымирание растений приводят человечество к продовольственному кризису, коллектив исследователей и учёных отправляется сквозь червоточину (которая предположительно соединяет области пространства-времени через большое расстояние) в путешествие, чтобы превзойти прежние ограничения для космических путешествий человека и найти планету с подходящими для человечества условиями.
				<div class="button"><a href="#">Смотреть</a></div>
			</div>
			<div class="info_film">
				<img src="assets/img/cloud.png">
				Когда засуха, пыльные бури и вымирание растений приводят человечество к продовольственному кризису, коллектив исследователей и учёных отправляется сквозь червоточину (которая предположительно соединяет области пространства-времени через большое расстояние) в путешествие, чтобы превзойти прежние ограничения для космических путешествий человека и найти планету с подходящими для человечества условиями.
				<div class="button"><a href="#">Смотреть</a></div>
			</div>
			<div class="info_film">
				<img src="assets/img/452144.png">
				<h1>Веном</h1>
				Режиссер: Рубен Флейшер<br>
				Год выпуска: 2018<br>
				Рейтинг: 6.9/10<br>
				<div class="button"><a href="wenom.php">Смотреть</a></div>
			</div>
		</div>
	</div>
	<?php require_once "assets/blocks/footer.php"?>
</div>
</body>
</html>