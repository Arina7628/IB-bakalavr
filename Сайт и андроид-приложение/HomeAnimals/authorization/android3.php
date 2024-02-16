<?php
require "db.php"; 

 if(isset($_GET['post'])){ 
 
   //Reading post values 
   $fname = $_POST['animal']; 
   $ldata = $_POST['last_name']; 
}
$lname = explode(" ", $fname);
if(trim($lname[0])== '')
{
$errors[]='Не введено животное!';
}
if(R::count('likes', "name=?", array($lname[0]))>0)
{
$errors[]='Вы вводили уже это животное!';
}
if(empty($errors)){
$like=R::dispense('likes');
 	
	$like->name=$lname[0];

	R::store($like);

	echo "Животное добавлено";
	}
	else
	{
		echo array_shift($errors);
	}
?>