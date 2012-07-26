<head> <meta charset="utf8"> </head>


<style type="text/css">
#form {
	position: fixed;
}
</style>

<form method="post" >
  Your name: <input type="text" name="name" /><br />

<table>
 	<tr>
		<td>Content:</td>
		<td><textarea rows="4" cols="50" name="con" ></textarea>
		<td/>
	<tr/>
<table/>

<input type="submit" value="送出"/>

</form><br/>

<?php
/*$name = isset($_POST['name'])?$_POST['name']:"";
$content = isset($_POST['con'])?$_POST['con']:"";
$msg ="[". date("Y/m/d- H:i:s")."]" .$name." said: <br/>" .$content ;
$filename = "hismsg.txt";
*/
function write(){
	require("mysql.php");
	$sql = "INSERT INTO `team1GuestDB`.`GuestBook` (`id`, `name`, `msg`, `timestamp`) VALUES (NULL,:name,:msg, CURRENT_TIMESTAMP)";
	$stm = $dbh->prepare($sql);
	$stm->execute(array(':name' => $_POST['name'] ,':msg' => $_POST['con']));
/*	$filename = "./hismsg.txt";
	$handle = fopen($filename, "a+");
	fputs($handle, $msg."\n");
	fclose($handle); 
*/
}

function read(){

require ("mysql.php");
$sql = "SELECT * FROM  `GuestBook` ";
$sth = $dbh->query($sql);
$result = $sth->fetchAll();
foreach($result as $tmp){
	echo htmlspecialchars($tmp['name']).'<br />';
	echo htmlspecialchars($tmp['msg'])."<br />";
}

/*	$filename = "./hismsg.txt";
	$handle = fopen($filename, "r");
	while( $str = fgets($handle) ) {
		echo nl2br($str);
	}
	fclose($handle);*/
}	


if ( isset($_POST['name']) && isset($_POST['con']) ) {
	write();
}
echo "<br />";
read()

?>




