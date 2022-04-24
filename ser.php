<!DOCTYPE html>
<html>
<head>
<?php
	$title = "Ходячие мертвецы" ;
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
			
			<h1>Ходячие мертвецы</h1>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/zIjSaeBp974" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div class="info_film_page">
				<span class="label">Рейтинг: </span><span class="value">8.0 / 10</span>
				<span class="label">Год: </span><span class="value">2010 — 2022</span>
				<span class="label">Создатель: </span><span class="value">Фрэнк Дарабонт</span>
			</div>
			<hr>
			<h2>Описание сериала Ходячие мертвецы</h2>
			<div class="description_film">
				
				<img src="assets/img/dead.png">
				<p>Сериал рассказывает историю жизни семьи шерифа после того, как «зомби» - эпидемия апокалиптических масштабов захлестнула земной шар. Шериф Рик Граймс путешествует со своей семьей и небольшой группой выживших в поисках безопасного места для жизни. Но постоянный страх смерти каждый день приносит тяжелые потери, заставляя героев почувствовать глубины человеческой жестокости. Рик пытается спасти свою семью, и открывает для себя, что всепоглощающий страх тех, кто выжил, может быть опаснее бессмысленных мертвецов, бродящих по земле.</p>

			</div>
			<hr>
			<h2>Отзывы о сериале Ходячие мертвецы</h2>
			<div class="reviews">
				
				<div class="review_name">
					Корн
				</div>
				<div class="review_text">	
					Под конец не очень
				</div>
			</div>
			<div class="reviews">
				<div class="review_name">
					ПБ
				</div>
				<div class="review_text">	
					Норман Ридус до сотрудничества с Кодзимой... Были времена...
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