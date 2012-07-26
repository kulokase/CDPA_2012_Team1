<!DOCTYPE>
<html>
<head>
	<meta charset="utf8"/>
	<title>歡迎光臨</title>
	<style type="text/css">
		h1
		{
			color:#00FF00;
			text-align:center;
			font-size:70px;
			background:#9966CC;
		}
		body
		{
			background-image:url('pic1.jpg');
			background-size:1400px 1400px;	
		}		
		#label-type1
		{
			color:#191970;
		}

	</style>
</head>
<body>
	<h1><em>Message Board</em></h1>
	<hr/>
	<p style="color:red;font-size:30px"><strong>在這裡說些什麼吧!!</strong></p>
	<form action="test_message.php" method="post">
		<label id="label-type1" for="name"><big><strong>留言者姓名：</strong></big></label>  
		<input type="text" name="fname"/>
		<br/>
		<label id="label-type1" for="content"><big><strong>留言內容：</strong></big></label>
		<br/> 
		<textarea rows="10" cols="50" name="mes"></textarea>
		<input type="reset"/>
		<input type="submit" value="Send"/>
	</form>
	<p style="color:blue;font-size:30px"><strong>~~~[留言牆]~~~</strong></p>
	<br/>
	<?php
		function writetofile()
		{
			require("mysql.php");
			$sql = "INSERT INTO `team1GuestDB`.`GuestBook` (`id`, `name`, `msg`, `timestamp`) VALUES (NULL, :name , :msg , CURRENT_TIMESTAMP);";
			$stm = $dbh->prepare($sql);
			$stm->execute(array(':name' => $_POST['fname'] , ':msg' => $_POST['mes']));	
/*
			$fp=fopen("mes_data.txt","a+");
			if($fp!=NULL)
				fwrite($fp,$_POST['fname']."  於(".date("Y/m/d - H:i:s").") "." 說： <br/>".$_POST['mes']."<br/><hr/>");
			else
				echo "FAILED TO OPEN FILE .";	
			fclose($fp);
*/
		}
			
		function readfromfile()
		{
			require("mysql.php");
		        $sql = "SELECT * FROM  `GuestBook` ";

      			$sth = $dbh->query($sql);
			$result = $sth->fetchALL();
			foreach($result as $tmp)
				echo htmlspecialchars($tmp['name'])."  於(".$tmp['timestamp'].")  說：<br/>".htmlspecialchars($tmp['msg'])."<br/>"."<hr/>";
/*
			$fp=fopen("mes_data.txt","r+");
			if($fp!=NULL)
				while(!feof($fp))
					echo fgets($fp) ;
			else
				echo "FAILED TO OPEN FILE .";
			fclose($fp);
*/	
		}
		
		if(isset($_POST['fname']) && $_POST['mes'])
			writetofile();
		readfromfile();
	?>
	<hr/>
</body>
</html>
