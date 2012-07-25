<html>
	<head>
		<title>TinyGuestBook</title>
		<link rel="stylesheet" type="text/css" href="./default.css">
		<style type = "text/css">
		h4 {
			color: #00F000;
		}
		p {
			color: #008888;
		}
		</style>
	</head>
	<body>
		<h3 style="text-align:left;">TinyGuestBook</h3>
		<img src="./w3schoolslogo.gif"/>
		<form method="post">
		<table>
			<tr>
				<td><label>Name:</label></td>
				<td><input type="text" name="name"/><br/></td>
			</tr>
				<td><label>Content:</label></td>
				<td><textarea rows="3" cols="16" name="content"></textarea></td>
			</tr>
			<tfoot>
				<tr><td><input type="submit" value="Send"/></td></tr>
			</tfoot>
		</table>
		</form>
	<?php
		function writeTo($name,$content){
			$file = fopen("dailogue.txt","a+") or exit("aaaaaaUnable to open file!");
			fwrite($file,$name . " (" . date("Y/m/d - H:i:s")  . ") " . "said:<br/>");
			fwrite($file,$content . "<br/>");
			fclose($file);
		}
	
		function readFrom(){
			$file = fopen("dailogue.txt","r") or exit("Unable to open file!");
			while(!feof($file)){
				echo "<p>" . fgets($file) . "<p>" . "<br/>";
				echo "<p>" . "    "  . fgets($file) . "<p>" . "<br/>";
			}
			fclose($file);
		}

		if(isset($_POST['name'])){
			writeTo($_POST['name'],$_POST['content']);
			readFrom();
		}
	?>
	</body>
</html>
