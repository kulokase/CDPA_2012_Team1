
<html>
<head>
	<title>Talkroom</title>
   
</head> 
<body>
	<form method="post">
	<table>
		<tr>
			<td><label>Name:</label></td>
			<td><input type="text" name="user" /><br /></td>
		</tr>
		<tr>
			<td><label>Content:</label></td>
			<td><textarea rows="3" cols="16" name="content"></textarea></td>
		</tr>
		<tfoot>
			<tr><td><input type="submit" value="Send"/></td></tr>
		</tfoot>
	</table>
	</form>
	<?php
	print_r($_POST);
	echo "<br/>";
	echo $_POST['user'];
	function wightfun(){
		$fop= fopen("log.txt","a+");
		fputs($fop,$_POST['user'] . $_POST['content']);
		fclose($fop);
	}
	function readfun(){
		$fop= fopen("log.txt","r+");
		while(!feof($fop))
  		 {
 			  echo fgets($fop). "<br />";
  		 }
 		fclose($fop);
	}
	wightfun();
	readfun();
	?>
	
	
</body>
</html>


