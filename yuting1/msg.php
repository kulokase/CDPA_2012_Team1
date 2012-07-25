<html>
	<head>
		<title>Hello Kitty = =|||</title>
	<head>
<body style="color:#211FBD; background:
      url(http://2.bp.blogspot.com/-DgiZNFbLiwI/TyxFgDp_yZI/AAAAAAAAGvY/RtPboSG7pus/s1600/hello-kitty-face-wallpaper.gif)no-repeat fixed center;
filter:Alpha(Opacity=80,
                 FinishOpacity=80, Style=2);">

<div style="color:#211FBD; background:#ffccff;filter : alpha(opacity=50); opacity : 0.5;">
<form method="post">
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

</form>

</div>

<div style="color:#89174F; background:#ffccff;filter : alpha(opacity=50); opacity : 0.5;">

<?php

$name = $_POST['name'];
$content = $_POST['content'];

$handle = fopen("msg.txt", "a+");
fwrite($handle, "Name: $name	" . '<br/>' . "Content: $content" . '<br/>' . "----------------------------------------" . '<br/>'); 
fclose($handle);
$handle = fopen("msg.txt", "r");

$txt = fread($handle, filesize("msg.txt"));
fclose($handle);

//echo '<br/>'.$_POST['name'];
//echo '<br/>'.$_POST['content'];

echo $txt . "<br/>";

?>

</div>

</body>

</html>
