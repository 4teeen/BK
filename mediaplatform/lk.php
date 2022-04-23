<!DOCTYPE html>
<html>
<head>
<?php
$title = "Главная" ;
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
<div class="inf">
<input type="button" class="btn1" value="Nickname" />
<input type="button" onclick="window.location.href='lkfilm.html';" class="btn1" value="Фильм" />
<input type="button" onclick="window.location.href='lkfilm.html';" class="btn1" value="Сериалы" />
<input type="button" onclick="window.location.href='lkfilm.html';" class="btn1" value="Видео" />
<button><img src="assets/img/sett.png" onclick="window.location.href='lkfilm.html';" alt="Настройки"></button>
</div>

<form enctype="multipart/form-data" method="post" action="http://80.78.207.86:8080/loading/">
<p>
<input type="file" name="izobr" multiple accept="image/jpeg,image/jpg,image/png" />
</p>
<input type="submit" class="btn2" value="Добавить фото" />
<div class="side_content">
<div class="sidebar_container">

<div class="sidebar">

</div>
</div>
<div class="content">

</div>

</div>
</div>
<?php require_once "assets/blocks/footer.php"?>
</div>
</div>
</body>
</html>