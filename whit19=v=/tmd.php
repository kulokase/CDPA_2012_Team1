<html>
        <head>
<meta charset = "utf8" >
              <title>White19</title>
        </head>
        <body style="background: url(http://www.downsc.com/man_pic/image_dabaoku/6/1/b_img/0517.jpg);filter:Alpha(Opacity=80, FinishOpacity=80, Style=2); /* IE */
-moz-opacity:0.5; /* Moz + FF */
opacity:0.5;">
<div style="color:blue">
	<h1><span style="color:red">Enjoy it ^.^</span></h1>
	<form action ="tmd.php" method ="post">
		<span style="color:#040051">nickname:</span><input type="text" name="nickname"/><br/>
		<span style="color:#040051">massage:</span><br/><textarea cols = "50" rows = "20" name="msg"></textarea>
		<input type = "submit" value="Submit"/>
	</form>

<?php
$nickname = $_POST['nickname'];
$msg = $_POST['msg'];

function write($nickname,$msg){
	require("mysql.php");
	$sql = "INSERT INTO `team1GuestDB`.`GuestBook` (`id`, `name`, `msg`, `timestamp`) VALUES (NULL, :name , :msg , CURRENT_TIMESTAMP)";
	$stm = $dbh->prepare($sql);
	$stm->execute(array(':name' => $nickname, ':msg' => $msg));
	/*
	if(($f1=fopen("data.txt","a+"))==NULL){}
	fputs ($f1,"<". $nickname . ">" . date("Y/m/d - H:i:s") . ":" );
	fputs($f1,"$msg" . "\n");
	fclose($f1);*/	 }

write($_POST['nickname'],$_POST['msg']);

function read(){
	/*if(($f1=fopen("data.txt","r"))==NULL){}
	else{
		while(!feof($f1)){
			echo nl2br(fgets($f1));
		}
		fclose($f1);
	}
*/
require ("mysql.php");
$sql = "SELECT * FROM  `GuestBook`";

$sth = $dbh->query($sql);
$result = $sth->fetchAll();
foreach($result as $tmp){
			echo "*";
			echo htmlspecialchars($tmp{'name'})."*".'<br/>';
			echo htmlspecialchars($tmp{'msg'}).'<br/>';
			}
echo "in~". date("Y/m/d - H:i:s")."<br/><br/>";
}
read();
?>
        </body>
</html>

