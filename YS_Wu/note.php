<html>
	<head>
		<title>Message Board</title>
		<h1>Issue Report!!!</h1>
		<form   method="get"/>
			Name test:<input type="text" name="n"/> <br/>
			Message:<br/> <textarea cols="50" rows="20"  name="m"></textarea>
		<input type="submit" /></form>
	
<?php
	$a=$_GET["n"];
	$b=$_GET["m"];
	
	$f1=fopen("data.txt","a+");
	fwrite($f1,"Name:".$_GET["n"]."<br/> Message:".$_GET["m"]);
	fclose($f1);

	$f2=fopen("data.txt","r");
	while(!feof($f2)){
		$tmp = fgets($f2);
		echo $temp;
	}
	fclose($f2);
?>
</head>
</html>
