<!DOCTYPE html>
<html>
<head>
<?php
	$title = "Во все тяжкие" ;
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
			
			<h1>Во все тяжкие</h1>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/tRT3bAINsjE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div class="info_film_page">
				<span class="label">Рейтинг: </span><span class="value">8.9 / 10</span>
				<span class="label">Год: </span><span class="value">2008 — 2013</span>
				<span class="label">Создатель: </span><span class="value">Винс Гиллиган</span>
			</div>
			<hr>
			<h2>Описание сериала Во все тяжкие</h2>
			<div class="description_film">
				
				<img src="assets/img/breakingbad.png">
				<p>На протяжении всего сериала показана история Уолтера Уайта, школьного учителя, у которого диагностировали неоперабельный рак лёгких. Вместе со своим бывшим учеником Джесси Пинкманом он начинает производить и продавать метамфетамин, чтобы обеспечить финансовое будущее своей семьи.</p>

			</div>
			<hr>
			<h2>Отзывы о сериале Во все тяжкие</h2>
			<div class="reviews">
				
				<div class="review_name">
					Somebody
				</div>
				<div class="review_text">	
					Отличный сериал, один из лучших
				</div>
			</div>
			<div class="reviews">
				<div class="review_name">
					Shrek
				</div>
				<div class="review_text">	
					Мой мультфильм лучше ахахах
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
</div>
</body>
</html>