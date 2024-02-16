<?php 
require "../authorization/db.php" ;

$path='animals.txt';
 
if($_POST['buy']) {
    unset($_SESSION['b']);
        unset($_SESSION['count_p']);
    }
 
if($_POST['clear']) {
    unset($_SESSION['count_p']);
 
unset($_SESSION['b']);
    
 
$fp = fopen($path, 'w'); 
fputs($fp, "");
fclose($fp);
}
 
if($_POST['s']) {
 
    for($i=0;$i<count($_POST['id']); $i++){
 $result= $_POST['id'][$i]."<br>"; 
$fp = fopen($path, 'a+'); 
fputs($fp, $result);
 fclose($fp);
}

    if(!$_SESSION['count_p']) {
    $_SESSION['count_p'] = count($_POST['id']);
 
    }
    else {$_SESSION['count_p'] =  $_SESSION['count_p']+count($_POST['id']);}
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Аккаунт пользователя</title>
	<link rel="stylesheet" href="kab.css">
</head>
<body>
	<header>
		<div class="container">
		<div class="pizza">	
			<form action='' method="POST">
<div class='korzina'>
			<div class="titles__first">
			Аккаунт пользователя
			</div>
			<div class="titles">
			Любимые домашние животные <br>
			<a href="../index.php">На главную</a><br>
			<br>
<?PHP 
 
if($_SESSION['count_p']) {  
 
 echo "$_SESSION[count_p]  ";
 
 echo "В понравившемся: <br>";
 
 
     $a = file_get_contents($path);
 
    echo $a."<br>";
 

 }
 else {echo "В понравившемся пусто";}
 
 ?>
 	
 </div>
 <br>
 <div class="cart">
 <?php if(isset($_SESSION['logged_user'])): ?>

								
								<?php else : ?>
								<p>Чтобы оформить заказ авторизируйтесь</p>
								<a href="../authorization/login.php">Авторизоваться</a><br>
								<?php endif; ?>
</div><br>
 <button class="button5" type='submit' name='clear' value='Удалить'>Очистить данные</button>
			<?php 

			$table=get_table();
			foreach ($table as $tables):?>
		<table> 
			<tr>

			
			<td><p><? echo $tables["name"];?><input value='<? echo $tables["name"];?>' type='checkbox' name='id[]' > </p></td>

			</tr>	
		</table>
		<button class="button5" type='submit' name='s' value='Добавить'> Добавить</button>

	 		<?php endforeach ?>

	 	</form>
		</div>
		
 
 

</header>
</body>
</html>