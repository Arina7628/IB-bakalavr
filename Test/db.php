<?php

$dblocation = 'localhost'; // имя хоста
$database = 'skud'; // имя базы данных 
$dbuser = 'mysql'; // имя пользователя
$dbpasswd = 'mysql'; // пароль пользователя

// устанавливаем соединение с базой данных 

$link = mysqli_connect($dblocation, $dbuser, $dbpasswd, $database) or die("Не могу подключиться");  
mysqli_select_db($link, $database) or die ('Не могу выбрать БД');

//установка кодировки
$link->set_charset("utf8");
?>