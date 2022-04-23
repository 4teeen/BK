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
				<span class="label"><strong><font color=#49945a>Интерстеллар</strong></font></span></br>
				<span class="label">Рейтинг: </span><span class="value"><font color=#49945a>8.1</font></span></br>
				<span class="label">Год: </span><span class="value"><font color=#49945a>2014</font></span></br>
				<span class="label">Режиссер: </span><span class="value"><font color=#49945a>Кристофер Нолан</font></span></br></br>
				Фильм повествует о путешествиях группы исследователей, которые используют недавно обнаруженный пространственно-временной тоннель, чтобы обойти ограничения полёта человека в космосе и покорить огромные расстояния на межзвёздном корабле.
				<div class="button"><a href="show.php">Смотреть</a></div>

			</div>

			<div class="info_film">
				
				<img src="assets/img/max.png">
				<span class="label"><strong><font color=#49945a>Безумный Макс: Дорога ярости</font></strong></span></br>
				<span class="label">Рейтинг: </span><span class="value"><font color=#49945a>7.8</font></span></br>
				<span class="label">Год: </span><span class="value"><font color=#49945a>2015</font></span></br>
				<span class="label">Режиссер: </span><span class="value"><font color=#49945a>Кристофер Нолан</font></span></br></br>
				Действие происходит в постапокалиптическом будущем. В течение фильма герои пытаются пересечь пустыню и добраться до легендарных «Зелёных Земель» на востоке; их преследует тиран Несмертный Джо, считающий женщин-пассажирок грузовика своей похищенной собственностью. 
				<div class="button"><a href="show1.php">Смотреть</a></div>

			</div>

			<div class="info_film">
				
				<img src="assets/img/matrix.png">
				<span class="label"><strong><font color=#49945a>Матрица:Революция </strong></font></span></br>
				<span class="label">Рейтинг: </span><span class="value"><font color=#49945a>7.6</font></span></br>
				<span class="label">Год: </span><span class="value"><font color=#49945a>2003</font></span></br>
				<span class="label">Режиссер: </span><span class="value"><font color=#49945a>Ларри и Эндрю Вачовски</font></span></br></br>
				В центре сюжета - финальная битва людей и машин за освобождение Зинона - города людей, расположенного в центре Земли.Пока армия машин пытается уничтожить Зион, его жители из последних сил держат оборону.
				<div class="button"><a href="show2.php">Смотреть</a></div>

			</div>

			<div class="info_film">
				
				<img src="assets/img/cloud.png">
				<span class="label"><strong><font color=#49945a>Облачный атлас</strong></font></span></br>
				<span class="label">Рейтинг: </span><span class="value"><font color=#49945a>7.7</font></span></br>
				<span class="label">Год: </span><span class="value"><font color=#49945a>2012</font></span></br>
				<span class="label">Режиссер: </span><span class="value"><font color=#49945a>Лана и Эндрю Вачовски, Том Тыквер</font></span></br></br>
				Фильм состоит из шести независимых, но идейно и символически связанных историй о шести людях из прошлого, настоящего и будущего.Шесть историй — пять реинкарнаций, происходящих в разное время, тесно переплетающихся между собой.
				<div class="button"><a href="show3.php">Смотреть</a></div>

			</div>
		</div>

	</div>
	<?php require_once "assets/blocks/footer.php"?>
</div>
</body>
</html>