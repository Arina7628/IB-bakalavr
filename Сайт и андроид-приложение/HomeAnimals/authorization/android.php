<?php
require "db.php"; 
 
 if(isset($_GET['post'])){ 
 
   //Reading post values 
   $fname = $_POST['login']; 
   $ldata = $_POST['last_name']; 
}
$lname = explode(" ", $fname);


	@$data['login']=$lname[0];
	@$data['password']=$lname[1];
	$errors=array();
	$user = R::findOne('users', 'login = ?', array($data['login'] ));
	if($user)
	{
if( password_verify($data['password'], $user->password))
{
	//good
	$_SESSION['logged_user']=$user;
	echo "Вы успешно авторизованы";

} else
{
	$errors[]='Введён неверный пароль';
}

	}
	else{
		$errors[]='Пользователь с таким логином не найден';
	}
	if(!empty($errors))
{
	
	echo array_shift($errors);
}
