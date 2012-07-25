<html>
        <head>
              <title>LIKE IT</title>
        </head>
        <body style="background: url(http://i23.photobucket.com/albums/b385/wang_1980/Photo1/1301.jpg);filter:Alpha(Opacity=80, FinishOpacity=80, Style=2); /* IE */
-moz-opacity:0.5; /* Moz + FF */
opacity:0.5;">
<div style="color:blue">
	<h1><span style="color:red">LEE HOM!</span></h1>
	<form action ="tmd.php" method ="post">
		<span style="color:pink">nickname:</span><input type="text" name="nickname"/><br/>
		<span style="color:pink">massage:</span><br/><textarea cols = "50" rows = "20" name="msg"></textarea>
		<input type = "submit" value="Submit"/>
	</form>

<?php
$nickname = $_POST['nickname'];
$msg = $_POST['msg'];

function write($nickname,$msg){
	if(($f1=fopen("data.txt","a+"))==NULL){}
	fputs ($f1,"<". $nickname . ">" . date("Y/m/d - H:i:s") . ":" );
	fputs($f1,"$msg" . "\n");
fclose($f1);	
}

write($_POST['nickname'],$_POST['msg']);

function read(){
	if(($f1=fopen("data.txt","r"))==NULL){}
	else{
		while(!feof($f1)){
			echo nl2br(fgets($f1));
		}
		fclose($f1);
	}
}
read();
?>
        </body>
</html>

