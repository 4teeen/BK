<!DOCTYPE html>
<html>
<head>
	<?php
	$title = "Главная страница" ;
	require_once "assets/blocks/head.php";
	?>
</head>
<body>
	<div class="main">
		<?php require_once "assets/blocks/header.php" ?>
	</div>
	<div class="side_content">
			<?php require_once "assets/blocks/rightCol.php" ?>
		</div>

		<div class="content">
			
			<h1>Новое кино</h1>
			<div class="films_block">		
				<a href="show2.php"><img src="assets/img/matrix.png"></a>
				<a href="show1.php"><img src="assets/img/max.png"></a>
				<a href="show.php"><img src="assets/img/inter.png"></a>
				<a href="show3.php"><img src="assets/img/cloud.png"></a>
			</div>
			<h1>Новые сериалы</h1>
			<div class="films_block">		
				<a href="ser.php"><img src="assets/img/dead.png"></a>
				<a href="ser2.php"><img src="assets/img/silicon.png"></a>
				<a href="ser1.php"><img src="assets/img/breakingbad.png"></a>
				<a href="#"><img src="assets/img/xfiles.png"></a>
			</div>
			<div class="posts">
				
				<hr>

				<h2><a href="#">Как снимали Интерстеллар</a></h2>
				<div class="posts_content">
					<p>
						6 ноября на российские экраны выходит новый фильм Кристофера Нолана «Интерстеллар». Нолан подарил зрителям трилогию о Тёмном рыцаре, триллер «Помни», фантасмагорию «Престиж» и фантастический боевик «Начало». «Интерстеллар» - это история судьбоносного космического путешествия, целью которого является открытие новой планеты, пригодной для жизни населения Земли.
					</p>
				</div>
				<p><a href="#">читать</a></p>

				<hr>

				<h2><a href="#">Как Хит Леджер создал образ реалистичного маньяка</a></h2>
				<div class="posts_content">
					<p>
						Драматический триллер «Джокер» вышел на большие экраны 3 октября. Фильм уже получил «Золотого льва» Венецианского фестиваля и, возможно, замахнется на главную кинопремию — «Оскар». Но фанаты и критики до сих пор настроены скептически: Хоакин Феникс сыграл Джокера так же талантливо, как Хит Леджер, или, может, сравнивать нет смысла?
					</p>
				</div>
				<p><a href="#">читать</a></p>
			</div>
		</div>

	</div>
	<?php require_once "assets/blocks/footer.php"?>
</div>
</body>
</html>