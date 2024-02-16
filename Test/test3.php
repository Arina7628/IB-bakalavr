<?php
require "db.php";?>
<!DOSTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Opros</title>
<link rel="stylesheet" href="mainlp.css">
</head>
<div class="Glavnadp">
<?php
$arr = array("Hello", "students", " ", "how", "are", "you");  
echo implode(" ", $arr);
?>