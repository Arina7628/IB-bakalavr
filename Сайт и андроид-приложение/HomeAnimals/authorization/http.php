<?php
require "db.php";
if(isset($_GET['post'])){ 
 
   //Reading post values 
   $fname = $_POST['first_name']; 
   $lname = $_POST['last_name']; 
   echo "Your name is ".$fname." ".$lname; 
} 
?>