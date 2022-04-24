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
<div class="inf">
<input type="button" class="btn1" value="Nickname" />
<input type="button"  class="btn1" value="Фильм" />
<input type="button"  class="btn1" value="Сериалы" />
<input type="button"  class="btn1" value="Видео" />
<button><img src="assets/img/sett.png" alt="Настройки"></button>
</div>
<!--
<p>
<form enctype="multipart/form-data" method="post">
</p>
<p>
<input type="file" name="izobr" multiple accept="image/jpeg,image/jpg,image/png" />
</p>
<input type="submit" class="btn2" value="Добавить фото"/>-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>
<p><form enctype="multipart/form-data" id="ajax_form"method="post" action="upload1.php"> </p>
  <input type="file" name="izobr" multiple accept="image/jpeg,image/jpg,image/png" />
  <input type="submit" class="btn2" value="Добавить фото"/>
<div id="result_form"></div>
<div class="content">
<div class="akk">	
<input type="file" id="file-uploader" accept=".jpg, .jpeg, .png" >
  <div id="image-grid">
  </div>
</div>
<script type ="text/javascript" src ="photo.js"></script>
			</div>
</div>
<div>
<?php require_once "assets/blocks/footer.php"?>
</div>
</body>
</html>