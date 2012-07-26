<html>
      <head> 
	     <title>Talkroom</title>
      </head> 
<body>
	<form method="post">
	<table>
		<tr>
		      	<td><label>Name:</label></td>
			<td><input type="text" name="user"/><br/></td>
		</tr>
		<tr>
			<td><label>Content:</label></td>
			<td><textarea rows="15" cols="30" name="content"></textarea></td>
		</tr>
	        <tfoot>	
			<tr><td><input type="submit" value="fuck"/></td></tr>
                </tfoot>		
	</table>
	</form>
        <!-------------------------------------------------------------------------------->

	<?php
	print_r($_POST);
	echo "<br/>";
	echo $_POST['user'];  
        echo $_POST['content'];

	function wightfun(){
               require("mysql.php");    
               $sql = "INSERT INTO `team1GuestDB`.`GuestBook` (`id`, `name`, `msg`, `timestamp`) VALUES (NULL, :name, :msg, CURRENT_TIMESTAMP)";
  	       $stm = $dbh->prepare($sql);	
               $stm->execute(array(':name' => $_POST['user'] , ':msg'=>$_POST['content']));
               
       /*	$fop= fopen("log.txt","a+");
		fputs($fop,$_POST['user'] . $_POST['content']);
		fclose($fop);
	*/}
	function readfun(){
                          
             require("mysql.php");  
             $sql = " SELECT * FROM  `GuestBook` ";
             
             $sth = $dbh->query($sql); 
             $result = $sth->fetchAll();
             foreach($result as $tmp)
             {
                echo $tmp['name'].'<br/>';
             }
	/*	$fop= fopen("log.txt","r+");
		while(!feof($fop))
  		 {
 			  echo fgets($fop). "<br />";
  		 }
 		fclose($fop);
*/	}
	wightfun();
	readfun();
	?>
	
	
</body>
</html>


