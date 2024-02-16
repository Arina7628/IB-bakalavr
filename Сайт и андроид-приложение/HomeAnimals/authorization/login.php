<?php
require "db.php";?>
<!DOSTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="mainlp.css">
</head>
<?php
$data = $_POST;
if(isset($data['do_login']))
{
	$errors = array();
	$user = R::findOne('users', 'login = ?', array($data['login']));
	if($user)
	{
		//логин существует
		if (password_verify($data['password'], $user->password))
		{
			//все хорошо логиним пользователя
			$_SESSION['logged_user'] = $user;
			echo ('<div style="color: #F36;">Привет <br/>'); 
			echo( $_SESSION['logged_user'][login]);
			echo '<div style="color: #F36;">Можете перейти на <a href="/HomeAnimals/index.php">главную </a> страницу!</div><hr>';
		}
		else
		{
			$errors[] = 'Неверный пароль!';
		}
	}else
	{
		$errors[] = 'Пользователь с таким логином не найден!';
	}
if( ! empty($errors) )
{
	echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
}
}
?>
<body>
<form action="login.php" method="POST">
<img src="../img/logo.jpg" alt="HomeAnimals" class="logo">
<div class="logp">
<p>
	<p><strong>Логин</strong>:</p>
	<input type="text" name="login" value="<?php echo @$data['login']; ?>">
</p>

<p>
	<p><strong>Пароль</strong>:</p>
	<input type="password" name="password" value="<?php echo @$data['password']; ?>">
</p>
	<p>
	<button type="submit" name="do_login">Войти</button>
	</p>
	<p>
	<a href="signup.php">Не зарегестрирован?</a><br>
	<a href="../index.php">На главную</a><br>
	</p>
</div>
</div>
</body>
</html>