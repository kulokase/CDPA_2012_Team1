<html>
	<head>
		<meta charset="utf8">
		<title>Message Board</title>
		<h1>Issue Report!!!</h1>
		<form   method="post"/>
			Name:<input type="text" name="n"/> <br/>
			Message:<br/> <textarea cols="50" rows="20"  name="m"></textarea>
		<input type="submit" /></form>
	
<?php
$in_name=$_POST['n'];
$in_context=$_POST['m'];
require ("mysql.php");
$sql= "INSERT INTO `team1GuestDB`.`GuestBook` (`id`, `name`, `msg`, `timestamp`) VALUES (NULL, :name, :msg, CURRENT_TIMESTAMP)";	

$stm=$dbh->prepare($sql);
$stm->execute(array( ':name'=>$in_name , ':msg'=>$in_context) );
/*$f1=fopen("data.txt","a+");
	fwrite($f1,"Name:".$_POST["n"]."<br/> Message:".$_POST["m"]."<br/>===========================<br/>");
	
	fclose($f1);

	$f2=fopen("data.txt","r");
	while(!feof($f2)){
		$tmp = fgets($f2);
		echo $tmp;
	}
	fclose($f2);
	*/
	require ("mysql.php");
	$sql =" SELECT * FROM  GuestBook ";
	$sth = $dbh->query($sql);
	$result=($sth->fetchAll());
	//print_r($sth->fetchAll());
	foreach($result as $tmp){
		echo htmlspecialchars($tmp['name']).'<br/>';
		echo htmlspecialchars($tmp['msg'])."<br/>====================<br/>" ;
	}
?>
</head>
</html>
