<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf8">
		<title>查詢維修進度</title>
	</head>
	<body>



	<script type="text/javascript" src="jquery-1.6.2.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
			//$("div#information").hide();
				});
	</script>
	
	
	
	<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">
	
	<p align=center>
	
		<h3>維修進度查詢</h3>
	
		<form method="post">
			<table>
				<tbody>
					<tr>
						<td><label>報修編號:</label></td>
						<td colspan="2"><input type="text" name="bugid" /><br /></td>
					</tr>
					<tr>
						<td><label>報修密碼:</label></td>
						<td colspan="2"><input type="password" name="regpass" /><br /></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3">
							<input type="button" value="忘記編號&密碼"/>
							<input type="submit" value="開始查詢"/>
							<input type="reset" value="重新輸入" />
						</td>
					</tr>
				</tfoot>
			</table>
		
		</form>
	</p>
	</div>
	
	
	<?php

require ("mysql.php");
if (!empty($_POST['bugid']) or !empty($_POST['regpass'])) {

	$user = trim($_POST['bugid']);
	$pass = trim($_POST['regpass']);

	$sql = "SELECT * FROM `reg_pair` WHERE `bugid` =:user AND `regpass` = :pass LIMIT 1";
	$stm = $dbh->prepare($sql);
	$stm->execute(array(':user' => $user , ':pass'=>$pass));
	$res = $stm->fetch();
	if ($res) {
		echo "congratulation!!";

	}else {
		echo "Invalid login information.";
	}
}else{
	echo "Please input username and password!";
}
?>


<script type="text/javascript">
//XXXDDD
$(document).ready(function(){

		<?php if($res){ ?>
		$("div#information").show();
		<?php }else{ ?>
		$("div#information").hide();
		<?php } ?>

		alert();
		});
</script>


<hr>

<!--
<script type="text/javascript" src="jquery-1.6.2.min.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
		$("div#information").hide(); 
		});
</script>
-->




<div id="information">
<?php

function read_status(){

	require ("mysql.php");
	$sql = "SELECT * FROM  `bug` LIMIT 0 , 30 ";
        $sth = $dbh->query($sql);
        $result = $sth->fetchAll();
/*
        foreach($result as $tmp){
                echo htmlspecialchars($tmp['id']).'<br />';
                echo htmlspecialchars($tmp['timestamp'])."<br />";
                echo htmlspecialchars($tmp['uname']).'<br />';
                echo htmlspecialchars($tmp['ip'])."<br />";
                echo htmlspecialchars($tmp['mac']).'<br />';
                echo htmlspecialchars($tmp['status'])."<br />";
        }
*/
	return $result[0];
}

$data = read_status();

?>


<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">

<p align=center>

<h3>報修詳細資訊</h3>

                 <table>
                        <tr>
                                <td><label>報修編號</label></td>
                                <td><label>報修時間</label></td>
                                <td><label>報修人</label></td>
                                <td><label>報修IP</label></td>
                                <td><label>報修網路卡號</label></td>
                                <td><label>處理狀態</label></td>
                        </tr>
		
                       
			 <tr>
                                <td><input type="text" name="id" value="
				<?php echo isset($data['id'])?htmlspecialchars($data['id']):""; ?>
				" readonly="readonly"/><br /></td>
				
				<td><input type="text" name="time" value="
				<?php echo isset($data['timestamp'])?htmlspecialchars($data['timestamp']):""; ?>
				" readonly="readonly"/><br /></td>
				
				<td><input type="text" name="who" value="
				<?php echo isset($data['uname'])?htmlspecialchars($data['uname']):""; ?>
				" readonly="readonly"/><br /></td>
				
				<td><input type="text" name="ip" value="
				<?php echo isset($data['ip'])?htmlspecialchars($data['ip']):""; ?>
				" readonly="readonly"/><br /></td>
				
				<td><input type="text" name="mac" value="
				<?php echo isset($data['mac'])?htmlspecialchars($data['mac']):""; ?>
				" readonly="readonly"/><br /></td>
				
				<td><input type="text" name="status" value="
				<?php echo isset($data['status'])?htmlspecialchars($data['status']):""; ?>
				" readonly="readonly"/><br /></td>
                        </tr>
                </table>
        </p>
</div>


<hr>


<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">

<h3>案件處理歷程</h3>


<?php

function write_int($id, $manager, $log){

        require("mysql.php");

        $sql_3 = "INSERT INTO `team1GuestDB`.`interactions` (`id`, `timestamp`, `manager`, `log`)
                VALUES (:id, CURRENT_TIMESTAMP, :manager, :log);";

        $stm = $dbh->prepare($sql_3);
        $stm->execute(array(':id' => $id, ':manager' => $manager, ':log' => $log));
}

$id = "777";
$manager = "PichuBabyXDDDDDDDDDDDD";

write_int($id, $manager, $_POST['log']);

function read_int(){

        require ("mysql.php");
        $sql_1 = "SELECT * FROM  `interactions`";
        $sth = $dbh->query($sql_1);
        $result = $sth->fetchAll();
        foreach($result as $tmp){
                echo htmlspecialchars($tmp['id']).'<br />';
                echo htmlspecialchars($tmp['timestamp'])."<br />";
                echo htmlspecialchars($tmp['manager'])."<br />";
                echo htmlspecialchars($tmp['log'])."<br />";
        }

}

read_int ();

?>

</div>


<hr>


<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">

<h3>結案紀錄</h3>

<?php

function read_log(){

        require ("mysql.php");
        $sql_2 = "SELECT * FROM  `process_log` ";
        $sth = $dbh->query($sql_2);
        $result = $sth->fetchAll();
        foreach($result as $tmp){
                echo htmlspecialchars($tmp['id']).'<br />';
                echo htmlspecialchars($tmp['timestamp'])."<br />";
                echo htmlspecialchars($tmp['manager'])."<br />";
                echo htmlspecialchars($tmp['log'])."<br />";
                echo "<br />";
        }

}

read_log ();

?>

</div>


<hr>


<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">

<h3>報修者新增留言</h3>

<form method="post"><p align=center>

        <table>
                <tr>
                        <td><label>報修編號：</label></td>
                        
                        <td><input type="text" value="<?=$id?>" readonly="readonly"/><br></td>
                        
                </tr>
                <tr>
                        <td><label>報修者：</label></td>

                        
                        <td><input type="text" value="<?=$manager?>'" readonly="readonly"/><br /></td>
                        
                </tr>
                <tr>
                        <td><label>留言內容:</label></td>
                        <td><textarea rows="3" cols="50" name="log"></textarea></td>
                </tr>
                <tfoot>
                        <tr>
                                <td colspan="2"><input type="submit" value="送出"/>
                                <input type="reset" value="清空" /></td>
                        



			</tr>
                </tfoot>
        </table>

	</p></form>

	</div>


</div>
</body>
</html>
