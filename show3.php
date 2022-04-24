<!DOCTYPE html>
<html>
<head>
<?php
	$title = "Облачный атлас" ;
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
			
			<h1>Облачный атлас</h1>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/_rZou_PqFoo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div class="info_film_page">
				<span class="label">Рейтинг: </span><span class="value">7.7 / 10</span>
				<span class="label">Год: </span><span class="value">2012</span>
				<span class="label">Режиссер: </span><span class="value">Лана и Эндрю Вачовски, Том Тыквер</span>
			</div>
			<hr>
			<h2>Описание фильма Облачный атлас</h2>
			<div class="description_film">
				
				<img src="assets/img/cloud.png">
				<p>Фильм состоит из шести независимых, но идейно и символически связанных историй о шести людях из прошлого, настоящего и будущего; одни и те же актёры играют нескольких героев в разных сюжетных линиях.</p>

			</div>
			<hr>
			<h2>Отзывы о фильме Облачный атлас</h2>
			<div class="reviews">
				
				<div class="review_name">
					Макс
				</div>
				<div class="review_text">	
					Хороший фильм
				</div>
			</div>
			<div class="reviews">
				<div class="review_name">
					Дмитрий Чусов
				</div>
				<div class="review_text">	
					Норм
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