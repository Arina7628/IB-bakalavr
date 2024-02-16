<?php
	$mysqli = false;
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli ("localhost", "root", "", "HomeAnimalsbase");
		$mysqli->query("SET NAMES 'utf-8'");
	}
	function closeDB () {
		global $musqli;
		$mysqli->close ();
	}
	?>