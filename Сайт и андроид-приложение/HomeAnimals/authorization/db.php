<?php
setlocale(LC_ALL, 'ru_RU.utf8');
Header("Content-Type: text/html;charset=UTF-8");
ob_start();
session_start();
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=animals','root','root' );
function get_table() {
	global $db;
$table=R::getAll('SELECT * FROM animalsusers');
return $table;}
?>