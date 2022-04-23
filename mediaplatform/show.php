<!DOCTYPE html>
<html>
<head>
	<?php
	$title = "Просмотр" ;
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
			
			<h1>Интерстеллар</h1>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/qcPfI0y7wRU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div class="info_film_page">
				<span class="label">Рейтинг: </span><span class="value">8.1 / 10</span>
				<span class="label">Год: </span><span class="value">2014</span>
				<span class="label">Режиссер: </span><span class="value">Кристофер Нолан</span>
			</div>
			<hr>
			<h2>Описание Интерстеллар</h2>
			<div class="description_film">
				
				<img src="assets/img/inter.png">
				<p>Когда засуха, пыльные бури и вымирание растений приводят человечество к продовольственному кризису, коллектив исследователей и учёных отправляется сквозь червоточину (которая предположительно соединяет области пространства-времени через большое расстояние) в путешествие, чтобы превзойти прежние ограничения для космических путешествий человека и найти планету с подходящими для человечества условиями.</p>

			</div>
			<hr>
			<h2>Отзывы об Интерстеллар</h2>
			<div class="reviews">
				
				<div class="review_name">
					Макс
				</div>
				<div class="review_text">	
					кал кала
				</div>
			</div>
			<div class="reviews">
				<div class="review_name">
					Дмитрий Чусов
				</div>
				<div class="review_text">	
					музыка прикольная, чисто ЭНЕРГИЯ течет в моих венах
				</div>
			</div>
			<div class="send">
				
				<form method = "post" action="#" id="review">
					
					<input type="text" name="review_name" placeholder="ваше имя">
					<textarea name="review_text"></textarea>
					<input type="submit" value="отправить">
				</form>

			</div>
		</div>

	</div>
	<?php require_once "assets/blocks/footer.php"?>
</div>
</body>
</html>