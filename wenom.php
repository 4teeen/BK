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

<h1>Веном</h1>
<iframe width="560" height="315" src="https://www.youtube.com/watch?v=n7GlLxV_Igk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="info_film_page">
<span class="label">Рейтинг: </span><span class="value">6.9 / 10</span>
<span class="label">Год: </span><span class="value">2018</span>
<span class="label">Режиссер: </span><span class="value">Рубен Флейшер</span>
</div>
<hr>
<h2>Описание Венома</h2>
<div class="description_film">

<img src="assets/img/452144.png">
<p>Что, если в один прекрасный день в тебя вселится симбиот, который наделит тебя сверхчеловеческими способностями? Вот только Веном — симбиот совсем недобрый, и договориться с ним невозможно. А нужно ли договариваться? Ведь в какой-то момент ты понимаешь, что быть плохим вовсе не так уж и плохо, так даже веселее. А в мире и так слишком много супергероев.</p>

</div>
<hr>
<h2>Отзывы о Веноме</h2>
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