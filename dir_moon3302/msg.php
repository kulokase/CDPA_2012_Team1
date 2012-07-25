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
		<td><textarea rows="4" cols="50" name="con" >
		</textarea>
		<td/>
	<tr/>
<table/>

<input type="submit" value="送出"/>

</form><br/>

<?php
$name = isset($_POST['name'])?$_POST['name']:"";
$content = isset($_POST['con'])?$_POST['con']:"";
$msg ="[". date("Y/m/d- H:i:s")."]" .$name." said: <br/>" .$content ;
$filename = "hismsg.txt";

function write($msg){
	$filename = "./hismsg.txt";
	$handle = fopen($filename, "a+");
	fputs($handle, $msg."\n");
	fclose($handle);
}

function read(){
	$filename = "./hismsg.txt";
	$handle = fopen($filename, "r");
	while( $str = fgets($handle) ) {
		echo nl2br($str);
	}
	fclose($handle);
}	


if ( isset($_POST['name']) && isset($_POST['con']) ) {
	write($msg);
}
echo "<br />";
read()

?>




