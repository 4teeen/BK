<DOCTYPE html>
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
<form action="check.php" method="post">
					<input type="Login" name="Login" class="form-control" id="Login" placeholder="Логин"><br>
                    <input type="Email" name="Email" class="form-control" id="Email" placeholder="Email"><br>
					<input type="Password" name="Password" class="form-control" id="Password" placeholder="Пароль"><br>
					<input type="Password_Confirmd" name="Password_Confirmd" class="form-control" id="Password_Confirmd" placeholder="Подтверждение пароля"><br>
					<button class="btn btn-success">Зарегистрироваться</button><br>
				</form> 
</div>
<?php require_once "assets/blocks/footer.php"?>
</body>
</html>