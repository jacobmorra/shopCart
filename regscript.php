<?php
	$dbLocalhost = mysql_connect("localhost:3306", "root", "")
			or die("Could not connect: " . mysql_error());
	
	mysql_select_db("shopCartUsers", $dbLocalhost)
			or die ("Could not find database: " . mysql_error());
?>