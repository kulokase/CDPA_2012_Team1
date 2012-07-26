<!DOCTYPE html>
<html>

<head><meta charset="utf8">
<title>查詢維修進度</title>
</head>
<body>

<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">

<p align=center>

<h3>維修進度查詢</h3>

	<form method="post">
        	<table>
	                <tr>
                        	<td><label>報修編號:</label></td>
                	        <td colspan="2"><input type="text" name="bugid" /><br /></td>
                	</tr>
        	        <tr>
	                        <td><label>報修密碼:</label></td>
                        	<td colspan="2"><input type="password" name="regpass" /><br /></td>
                	</tr>
        	        <tfoot>
	                        <tr>
					<td><input type="button" value="忘記編號&密碼"/></td>
                                	<td><input type="submit" value="開始查詢"/></td>
                        	        <td><input type="reset" value="重新輸入" /></td>
                	        </tr>
        	        </tfoot>
	        </table>

	</p>
</form>

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
	}

	else {
		echo "Invalid login information.";
	}
} 

else {
	echo "Please input username and password!";
}
?>


<hr>

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

<p align=center>

<h3>原始報修資訊</h3>

        <form>
                <table>
                        <tr>
                                <td><textarea rows="10" cols="80" readonly="readonly">

報修問題主旨：
詳情及補充說明：
寢室資訊：H222
手機：asdasd
信箱：fdsa@jfklasf
方便維修的日期及時間：
星期一：星期二：星期三：星期四：星期五：星期六：星期日：

				</textarea><br />
                        </tr>
                </table>

        </p>
</form>

</div>


<hr>


<h3>案件處理歷程</h3>

"網管的留言"


2012-07-26 01:16:59
網管 - 莊鈺婷：
回覆測試!



<hr>


<h3>報修者留言</h3>

"報修者的留言"


2012-07-26 01:16:59
報修者 - 莊鈺婷：
謝謝你!!


<hr>


<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">

<h3>報修者新增留言</h3>

<form method="post"><p align=center>
        <table>
                <tr>
                        <td><label>Name:</label></td>
                        <td><input type="text" name="name" readonly="readonly"/><br /></td>
                </tr>
                <tr>
                        <td><label>Content:</label></td>
                        <td><textarea rows="3" cols="50" name="content"></textarea></td>
                </tr>
                <tfoot>
                        <tr>
                                <td><input type="submit" value="送出"/></td>
                                <td><input type="reset" value="清空" /></td>
                        </tr>
                </tfoot>
        </table>

</p></form>

</div>


</body>
</html>
