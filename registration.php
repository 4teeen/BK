 <?php 
 require "assets/includes/db.php";
 
 $data = $_POST;
 if( isset($data['button']) )
 {
    //registration
    $errors = array();

    if(trim($data['login_name'])=='')
    {
      $errors[] = 'Введите логин!';
    }
    if(trim($data['email_name'])=='')
    {
      $errors[] = 'Введите почту!';
    }
    if($data['password_name1']=='')
    {
      $errors[] = 'Введите пароль!';
    }
    if($data['password_name2']!=$data['password_name1'])
    {
      $errors[] = 'Пароли не совпадают!';
    }
    if(R::count('users', "login = ?", array($data['login_name'])) > 0 )
    {
      $errors[] = 'Пользователь с таким логином уже существует!';
    }
    if(R::count('users', "email = ?", array($data['email_name'])) > 0 )
    {
      $errors[] = 'Пользователь с таким email уже существует!';
    }

    if(empty($errors))
    {
      $user = R::dispense('users');
      $user->login = $data['login_name'];
      $user->email=$data['email_name'];
      $user->password = password_hash($data['password_name1'], PASSWORD_DEFAULT);
      R::store($user);
      echo '<div style="color: green;">Вы успешно зарегестрированы!</div><hr>';
    }else
    {
      echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
 }
 ?>
<!DOCTYPE html>
<html>
<head>
<?php
    $title = "Регистрация" ;
    require_once "assets/blocks/head.php";
    ?>
</head>
<body>
<div class="main">
<?php require_once "assets/blocks/header.php" ?>
</div>
<div class="side_content">
<div class="sidebar_container">
</div>

<div class="content">
<h1 align="center">Регистрация</h1>
<form method="POST" align="center" action="registration.php" id="login">

<div class="Otstup">
<input type="text" name="login_name" placeholder="Логин" value="<?php echo @$data['login_name']; ?>" />
</div>

<div class="Otstup">
    <input type="text" name="email_name" placeholder="Email" value="<?php echo @$data['email_name'];?>"/>
    </div>

<div class="Otstup">
<input type="password" name="password_name1" placeholder="Придумайте пароль" value="<?php echo @$data['password_name1'];?>"/>
</div>
<div class="Otstup">
<input type="password" name="password_name2" placeholder="Повторите пароль" value="<?php echo @$data['password_name2'];?>"/>
</div>
<div class="lables_passreg_text">
</div>
<center>
<input type="submit" class="btn" name="button" value="Регистрация" />
<input type="button" class="btn" name="button" value="Есть аккаунт"  onClick='location.href="autorisation.php"'/>
</center>
</form>
</div>
</div>
<?php require_once "assets/blocks/footer.php"?>
</div>
</body>
</html>