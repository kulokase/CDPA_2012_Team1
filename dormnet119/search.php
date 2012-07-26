<!DOCTYPE html>
<html>

<head>
	<meta charset="utf8">
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
					<td colspan="3"><input type="button" value="忘記編號&密碼"/>
                                	<input type="submit" value="開始查詢"/>
                        	        <input type="reset" value="重新輸入" /></td>
                	        </tr>
        	        </tfoot>
	        </table>

	</p>
</form>

</div>


<hr>


<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">

<p align=center>

<h3>報修詳細資訊</h3>

        <form>
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
                                <td><input type="text" name="num" value="test" readonly="readonly"/><br /></td>
				<td><input type="text" name="num" value="test" readonly="readonly"/><br /></td>
				<td><input type="text" name="num" value="test" readonly="readonly"/><br /></td>
				<td><input type="text" name="num" value="test" readonly="readonly"/><br /></td>
				<td><input type="text" name="num" value="test" readonly="readonly"/><br /></td>
				<td><input type="text" name="num" value="test" readonly="readonly"/><br /></td>
                        </tr>
                </table>

        </p>
</form>

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


<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">

<h3>網管人員留言</h3>

<?php

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

echo "123 Hello World";
                /* This is a comment */
?>

</div>



<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">

<h3>報修者留言</h3>



<?php

function write_log($id, $manager, $log){

        require("mysql.php");

        $sql_3 = "INSERT INTO `team1GuestDB`.`process_log` (`id`, `timestamp`, `manager`, `log`)
                VALUES (:id, CURRENT_TIMESTAMP, :manager, :log);";

        $stm = $dbh->prepare($sql_3);
        $stm->execute(array(':id' => $id, ':manager' => $manager, ':log' => $log));
}

$id = "847";
$manager = "PichuBaby";

write_log($id, $manager, $_POST['log']);

?>





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
                        <?php
                        echo '<td><input type="text" value="'.$id.'" readonly="readonly"/><br /></td>';
                        ?>
                </tr>
                <tr>
                        <td><label>報修者：</label></td>

                        <?php
                        echo '<td><input type="text" value="'.$manager.'" readonly="readonly"/><br /></td>';
                        ?>
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

</body>
</html>
