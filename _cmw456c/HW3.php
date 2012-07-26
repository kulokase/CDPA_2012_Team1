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
		/* (isset($_POST['content'])){
				if($cfptr =fopen("data.txt","a+") != NULL ){
				$name =$_POST['fname'];
				$content=$_POST['content'];			
				fprintf($cfptr,"%s %s %s",$name,date("Y-m-d"),$content);
				echo "www<br/> $name" . 'date("Y-m-d")'." $content";	
				fclose($cfptr);
			}else ;}else ;
                 */
		function write_database($in_name,$in_context){
			require("mysql.php");
			$sql ="INSERT INTO `team1GuestDB`.`GuestBook` (`id`, `name`, `msg`, `timestamp`) VALUES (NULL, :name, :msg, CURRENT_TIMESTAMP);";
		$stm = $dbh->query($sql);
		$stm ->execute(array( ':name' =>  $in_name , ':msg' => $in_context));
		}
		function read_database(){
		        require("mysql.php");
			$sql ="SELECT * FROM `GuestBook` ";
        		$sth = $dbh->query($sql);
        		$result = $sth->fetchAll();
			foreach($result as $temp){
				echo $temp['name'].$temp['timestamp'].'說'.$temp['msg'].'<br/>';  
			}
		};
			
			
		/*	if($file =fopen("data.txt","r") != NULL ){
			
			
  			echo '<span class= \'conback\'>'. fgets($file) .'</span>';  			
			
			} else echo "Error";	

			fclose($file);	*/
		if(isset($_POST['fname']) && isset($_POST['content']))
				write_database();
		read_database();
		?>
     <body/>
<html/>
