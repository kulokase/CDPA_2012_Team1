<?php
	require("mysql.php");
	$sql = "SELECT * FROM  `GuestBook`"; 
	$sth = $dbh->query($sql);
	print_r($sth->fetchAll());
	
?>
