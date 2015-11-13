<?php
//if (isset($_POST["submit"]) && !empty($_POST["uname"]) && !empty($_POST["upass"]) && !empty($_POST["umail"])){
	$dbLocalhost = mysql_connect("localhost:3306", "root", "")
			or die("Could not connect: " . mysql_error());
	
	mysql_select_db("shopCartUsers", $dbLocalhost)
			or die ("Could not find database: " . mysql_error());

	$insertRec = "INSERT INTO userinfo (username, password, email) 
		VALUES ('$_POST[uname]', '$_POST[upass]', '$_POST[umail]')";
		
	mysql_query($insertRec, $dbLocalhost)
		or die("Could not insert user: " . mysql_error());
	
	echo "<h3>Welcome to our site, '$_POST[uname]'!</h3>";
//}
//else
//{
//	echo "something went wrong..";
//}
?>