<html>
	<head>
		<title> E'GuestBook </title>
	</head>



	<body bgcolor=#FF91FE>
		<form action="test3.php" method ="post" >
		<table>
			<tr>
				<td><label>Name: </label></td>
				<td><input type="test" name="user" /><br/></td>
			</tr>
			<tr>
				<td><label>Content:</label></td>
				<td><textarea rows="3" cols="16" name="content"></textarea></td>
			</tr>
			<tfoot>
				<tr><td><input type="submit" value="Send"/></td></tr>
				<tr><td><input type="reset" value="remove"/></td></tr>
			</tfoot>
		</table>
		</form>

<?php
//	print_r($_POST);
	
	$name= $_POST["user"];
        $content = $_POST['content'];

        $ptr = fopen("msg.txt","a+");
	
	  $year = date("Y/m/d - h:i:s") ;
/*        echo "$mon  ";
        echo "$day  ";
        echo "$hour  ";
        echo "$min  ";
        echo "$sec  ";
*/
        fwrite ( $ptr , $name . ":   " . $content  );
	fwrite ( $ptr, $year  . "<br/>");


        fclose($ptr);
	 $ptr = fopen("msg.txt","r");
	while(!(feof($ptr)))
		echo fgets($ptr);

	
	
?>
	</body>
</html> 
