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
if( isset($data['do_signup']) )
{
//registriryem

$errors =array();
if( trim ($data['login']) =='')
{
	$errors[] = 'Введите логин!';
}

if( trim ($data['email']) =='')
{
	$errors[] = 'Введите Email!';
}
if( trim ($data['password']) =='')
{
	$errors[] = 'Введите пароль!';
}
if( $data['password_2'] != $data['password'])
{
	$errors[] = 'Повторный пароль введен не верно!';
}
if(R::count('users', "login = ?" , array($data['login'])) >0)
{
	$errors[] = 'Пользователь с таким логином уже существует!';
}
if(R::count('users', "email = ?" , array($data['email'])) >0)
{
	$errors[] = 'Пользователь с таким email уже существует!';
}
if( empty($errors) )
{
//registriryem 
$user = R::dispense('users');
$user->login = $data['login'];
$user->email = $data['email'];
$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
R::store($user);
echo '<div style="color: green;">Вы зарегистрированы!</div><hr>';
}else
	{
	echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}
}
?>
<form action="signup.php" method="POST">
<img src="../img/logo.jpg" alt="HomeAnimals" class="logo">
<div class="logp">
	<p>
		<p><strong>Ваш логин<strong>:</p>
		<input type="text" name="login" value="<?php echo @$data['login'];?>">
	</p>
	
	<p>
		<p><strong>Ваш Email<strong>:</p>
		<input type=:text" name="email"value="<?php echo @$data['email'];?>">
	</p>
	
	<p>
		<p><strong>Ваш пароль<strong>:</p>
		<input type=:text" name="password"value="<?php echo @$data['password'];?>">
	</p>
	
	<p>
		<p><strong>Введите ваш пароль еще раз<strong>:</p>
		<input type=:text" name="password_2"value="<?php echo @$data['password_2'];?>">
	</p>
	
	<p>
	<button type="submit" name="do_signup">Зарегестрироваться</button>
	</p>
	<p>
	<a href="../index.php">На главную</a><br>
	</p>
	</div>
	</div>
</div>
</body>
</html>