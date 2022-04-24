<!DOCTYPE html>
<html>
<head>
<?php
    $title = "Ауторизация" ;
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
<?php
    require "assets/includes/db.php";
 
    $data = $_POST;
    // $password = '2002';
    // var_dump(password_verify($password, '$2y$10$XzO8dcZtHwjDl1PZ5/y0heNI2EKXn7kZgnHifXLZve0'));
    // var_dump(password_verify($password, password_hash($password, PASSWORD_DEFAULT, ['cost' => 5])));
    
    if(isset($data['button_enter']))
    {
        //$errors = array();
        //$password = R::findOne('users','password = ?', array($data['password_enter']));
        $user = R::findOne('users','login = ?', array($data['login_enter']));
        if( $user )
        {
            // var_dump($user->password);
            // var_dump($data['password_enter']);
            // var_dump($user->login);
            // $work = password_hash($data['password_enter'], PASSWORD_DEFAULT);
            // var_dump($work);
            // var_dump(password_verify ( $data['password_enter'] , $user->password ));

            if(password_verify($data['password_enter'], $user->password))
            {
                $_SESSION['logged_user'] = $user;
                echo '<div style="color: green;">Вы успешно ауторизированы!<br/>Можете перейти на <a href="index.php">Главную страницу!</a></div><hr>';
            }
            else{
                $errors[] = 'Пароль не верен!';
            }
        }
        else{
            $errors[] = 'Пользователь с таким логином не найден!';
        }
        if(!empty($errors))
    {
        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
    }
    ?>
<h1 align="center">Авторизация</h1>
<form method="POST" align="center" action="autorisation.php" id="login">

<div class="Otstup">
<input type="text" name="login_enter" placeholder="Логин" value="<?php echo @$data['login_enter']; ?>" />
</div>

<div class="Otstup">
<input type="password" name="password_enter" placeholder="Пароль" value="<?php echo @$data['password_enter']; ?>"/>
</div>
<div class="lables_passreg_text">
</div>
<center>
<button type="submit" class="btn" name="button_enter">Войти</button>
<!-- <input type="button" class="btn" name="button_enter" value="Войти" /> -->
</center>
</form>
</div>
</div>
<?php require_once "assets/blocks/footer.php"?>
</div>
</body>
</html>