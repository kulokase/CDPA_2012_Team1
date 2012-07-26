<html>
	<head>
		<title>COOL</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<head>
<body style="color:white; background:black
      url(http://dl.zhishi.sina.com.cn/upload/43/96/92/1241439692.7850325.gif)no-repeat fixed center;
filter:Alpha(Opacity=80,
                 FinishOpacity=80, Style=2);">

<div style="color:; background:; filter : alpha(opacity=50); opacity : 0.5;">
<form method="post"><p align=center>
	<table>
		<tr>
			<td><label>Name:</label></td>
			<td><input type="text" name="name" /><br /></td>
		</tr>
		<tr>
			<td><label>Content:</label></td>
			<td><textarea rows="3" cols="16" name="content"></textarea></td>
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

<div style="color:snow; background:;filter : alpha(opacity=50); opacity : 0.5;">

<?php



//$name = $_POST['name'];
//$content = $_POST['content'];

function fun_write($name, $content){

        require("mysql.php");

        $sql = "INSERT INTO `team1GuestDB`.`GuestBook` (`id`, `name`, `msg`, `timestamp`) 
		VALUES (NULL, :name, :msg, CURRENT_TIMESTAMP);";

        $stm = $dbh->prepare($sql);
        $stm->execute(array(':name' => $name, ':msg' => $content));
}


function fun_read(){

        require("mysql.php");

        $sql = "SELECT * FROM  `GuestBook` ";

        $sth = $dbh->query($sql);
        $result = $sth->fetchALL();
        foreach($result as $tmp){
                echo '<p align=center>' . htmlspecialchars($tmp['id']).'<br/>';
                echo htmlspecialchars($tmp['name']) . '<br/>';
                echo htmlspecialchars($tmp['msg']) . '<br/>';
                echo htmlspecialchars($tmp['timestamp']) . '<br/>';
                echo '<hr/>'.'</p>';;
        }
}

fun_write($_POST['name'], $_POST['content']);
fun_read();


/*$handle = fopen("msg.txt", "a+");
fwrite($handle, "Name: $name	" . '<br/>' . "Content: $content" . '<br/>' . "----------------------------------------" . '<br/>'); 
fclose($handle);
$handle = fopen("msg.txt", "r");

$txt = fread($handle, filesize("msg.txt"));
fclose($handle);
*/

//echo '<br/>'.$_POST['name'];
//echo '<br/>'.$_POST['content'];

//echo $txt . "<br/>";

?>

</div>

</body>

</html>
