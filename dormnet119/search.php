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
/*
function read(){

        require ("mysql.php");
        $sql = "SELECT * FROM  `interactions` ";
        $sth = $dbh->query($sql);
        $result = $sth->fetchAll();
        foreach($result as $tmp){
                echo htmlspecialchars($tmp['id']).'<br />';
                echo htmlspecialchars($tmp['timestamp'])."<br />";
                echo htmlspecialchars($tmp['manager'])."<br />";
                echo htmlspecialchars($tmp['log'])."<br />";
        }

}

read ();
*/
echo " Hello World";
                /* This is a comment */
?>

</div>


<hr>


<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">

<h3>報修者留言</h3>

<?php
/*
function read(){

        require ("mysql.php");
        $sql = "SELECT * FROM  `process_log` ";
        $sth = $dbh->query($sql);
        $result = $sth->fetchAll();
        foreach($result as $tmp){
                echo htmlspecialchars($tmp['id']).'<br />';
                echo htmlspecialchars($tmp['timestamp'])."<br />";
                echo htmlspecialchars($tmp['manager'])."<br />";
                echo htmlspecialchars($tmp['log'])."<br />";
        }

}

read ();
*/
echo " Hello World";
                /* This is a comment */
?>

</div>


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

<!--
INSERT INTO `team1GuestDB`.`process_log` (`id`, `timestamp`, `manager`, `log`) VALUES ('247', '2012-07-16', 'Pichu', 'AAA');
-->


</body>
</html>
