<!DOCTYPE html>
<html>
<head>
	<?php
	$title = "Обратная связь" ;
	require_once "assets/blocks/head.php";
	?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#sub_btn").click(function(){
				var name = $("#contact_name").val();
				var email = $("#contact_email").val();
				var message = $("#contact_text").val();
				var fail = "";
				if (name.length<3) {fail="Имя не меньше 3 символов"; return false;}
				else if(email.split('@').length-1==0 || email.split('.').length - 1 == 0)
					{fail ="Вы ввели некоректный email";return false;} 
				else if(message.length<20)
					{fail = "Сообщение должно быть больше 20 символов";return false;}
				if(fail != "")
				{
					$('#massageShow').html(fail + "<div class='posts_content'><br></div>");
					$('#messageShow').show();
					return false;
				}
				alert('ty');
			});
		});
	</script>
</head>
<body>
	<div class="main">
		<?php require_once "assets/blocks/header.php" ?>
	</div>
	<div class="side_content">
		<?php require_once "assets/blocks/rightCol.php"?>
		</div>

		<div class="content">
			
			<h1>Контакты</h1>
			<p>Отправьте ваш отзыв о портале</p>
			<div class="contacts">
				<form method = "post" action="#" id="review">
					<input type="text" name="contact_name" id="contact_name" placeholder="ваше имя">
					<input type="text" name="contact_email" id="contact_email" placeholder="ваш email">
					<textarea name="contact_text" id="contact_text" placeholder="введите ваше сообщение"></textarea>
					<div id="messageShow"></div>
					<button id="sub_btn" class="">Clock</button>
					<input type="submit" hidden id="done" class="btn" value="отправить">
				</form>
			</div>
		</div>

	</div>
	<?php require_once "assets/blocks/footer.php"?>
</div>
</body>
</html>