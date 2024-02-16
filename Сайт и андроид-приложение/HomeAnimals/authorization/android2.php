<?php
require "db.php"; 
 
 if(isset($_GET['post'])){ 
 
   //Reading post values 
   $fname = $_POST['login']; 
   $ldata = $_POST['last_name']; 
}
$lname = explode(" ", $fname);

if(trim($lname[0]) == '' )
{
$errors[]='Введите логин!';
}

if(trim($lname[1]) == '' )
{
$errors[]='Введите имя';
}
if(trim($lname[2]) == '' )
{
$errors[]='Введите email';
}
if(trim($lname[3]) == '' )
{
$errors[]='Введите номер телефона';
}



if($lname[4]=='')
{
$errors[]='Введите пароль';
}

if($lname[5] !=$lname[4])
{
$errors[]='Пароли не совпадают!';
}

if(R::count('users', "login=? ", array($lname[0]))>0)
{
$errors[]='Пользователь с таким логином уже существует';
}

if(R::count('users', "email=?", array($lname[2]))>0)
{
$errors[]='Пользователь с таким email уже существует';
}
if(empty($errors)){
$user=R::dispense('users');
	$user->login=$lname[0];
	$user->name=$lname[1];
	$user->email=$lname[2];
	$user->nomer=$lname[3];
	$user->password=password_hash($lname[4], PASSWORD_DEFAULT);
	R::store($user);

	echo "Вы успешно зарегистрированы ";
}
	else
{
	echo array_shift($errors);
}
?>