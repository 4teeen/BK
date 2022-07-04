<!DOCTYPE html>
<html>
<?php
	$title = "Матрица: Революция" ;
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
			
			<h1>Матрица:Революция</h1>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/PCHMZH998aY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div class="info_film_page">
				<span class="label">Рейтинг: </span><span class="value">7.6 / 10</span>
				<span class="label">Год: </span><span class="value">2003</span>
				<span class="label">Режиссер: </span><span class="value">Ларри и Эндрю Вачовски</span>
			</div>
			<hr>
			<h2>Описание фильма Матрица:Революция</h2>
			<div class="description_film">
				
				<img src="assets/img/matrix.png">
				<p>Действие фильма развивается сразу же после событий второго фильма. Пока армия машин пытается уничтожить Зион, его жители из последних сил держат оборону.</p>

			</div>
			<hr>
			<h2>Отзывы о фильме Матрица:Революция</h2>
			<div class="reviews">
				
				<div class="review_name">
					ScorPi
				</div>
				<div class="review_text">	
					Старые части лучше. Новая - вообще трэш
				</div>
			</div>
			<div class="reviews">
				<div class="review_name">
					ДМ_Час
				</div>
				<div class="review_text">	
					Джонни Сильверхэнд до того, как стал известен
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