<!DOCTYPE html>
<html>
<head>
<?php
	$title = "Силиконовая долина" ;
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
			
			<h1>Силиконовая долина</h1>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/fh16QS6gEqQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div class="info_film_page">
				<span class="label">Рейтинг: </span><span class="value">8.3 / 10</span>
				<span class="label">Год: </span><span class="value">2014 — 2019</span>
				<span class="label">Создатель: </span><span class="value">Дэйв Крински, Джон Альтшулер и Майк Джадж</span>
			</div>
			<hr>
			<h2>Описание сериала Силиконовая долина</h2>
			<div class="description_film">
				
				<img src="assets/img/silicon.png">
				<p>История о группе гиков, готовящих к запуску собственные стартапы в высокотехнологичном центре Сан-Франциско. Главные герои сериала бесплатно проживают в доме местного миллионера, но взамен им придётся отдать по 10% прибыли от будущих проектов.</p>

			</div>
			<hr>
			<h2>Отзывы о сериале Силиконовая долина</h2>
			<div class="reviews">
				
				<div class="review_name">
					Комментарий
				</div>
				<div class="review_text">	
					Комментирует...
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