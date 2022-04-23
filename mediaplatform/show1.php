<!DOCTYPE html>
<html>
<?php
	$title = "Безумный Макс: Дорога ярости" ;
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
			
			<h1>Безумный Макс: Дорога ярости</h1>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/-3ZoAp6owdk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div class="info_film_page">
				<span class="label">Рейтинг: </span><span class="value">7.5 / 10</span>
				<span class="label">Год: </span><span class="value">2015</span>
				<span class="label">Режиссер: </span><span class="value">Джордж Миллер</span>
			</div>
			<hr>
			<h2>Описание фильма Безумный Макс: Дорога ярости</h2>
			<div class="description_film">
				
				<img src="assets/img/max.png">
				<p>Преследуемый призраками беспокойного прошлого Макс уверен, что лучший способ выжить - скитаться в одиночестве. Несмотря на это, он присоединяется к бунтарям, бегущим через всю пустыню на боевой фуре, под предводительством отчаянной Фуриосы. Они сбежали из Цитадели, страдающей от тирании Несмертного Джо, и забрали у него кое-что очень ценное. Разъярённый диктатор бросает все свои силы в погоню за мятежниками, ступая на тропу войны - дорогу ярости.</p>

			</div>
			<hr>
			<h2>Отзывы о фильме Безумный Макс: Дорога ярости</h2>
			<div class="reviews">
				
				<div class="review_name">
					КоЯп
				</div>
				<div class="review_text">	
					Норм
				</div>
			</div>
			<div class="reviews">
				<div class="review_name">
					Дмитрий Чусов
				</div>
				<div class="review_text">	
					ЕЕЕЕ ПОСТАПОКАЛИСИС!!!
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