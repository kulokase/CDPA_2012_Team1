<!DOCTYPE html>
<html>
     <body>
     <style type="text/css">
	.conback {
		background: pink;
		margin: 10px;
		padding:5px;
		}
     </style>	

     		<head><title>HW3</title></head>
		<form action ="HW3.php"method ="post">
		<table>
			<tr>
			<td><label>Name:</label></td>
			<td><input type ="text" name ="fname"/><br/></td>
			</tr>

			<tr>
			<td><label>Content:</label></td>
			<td><textarea rows="2" cols="20"name ="content"/></textarea></td>
			</tr>

			<tfoot>
			<tr><td><input type ="submit" value ="send"/></td></tr>
			</tfoot>
		</table>
		</form>
		
		<?php		
	print_r($_POST);
			if(isset($_POST['content'])){
				if($cfptr =fopen("data.txt","a+") != NULL ){
				$name =$_POST['fname'];
				$content=$_POST['content'];			
				fprintf($cfptr,"%s %s %s",$name,date("Y-m-d"),$content);
				echo "www<br/> $name" . 'date("Y-m-d")'." $content";	
				fclose($cfptr);
			}else ;}else ;
			
			if($file =fopen("data.txt","r") != NULL ){
			
			
  			echo '<span class= \'conback\'>'. fgets($file) .'</span>';  			
			
			} else echo "Error";	
			fclose($file);	
		?>
     </body>
</html>
