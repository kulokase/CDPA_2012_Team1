<html>
	<head>
		<script type="text/javascript">
		function suc() {
			alert("您已報修成功"<br/>"以下為查詢碼"<br/>$c<br/>"請妥善保管!!!"<br/>"另以寄送此查詢碼至您信箱")
		}
		</script>
		<meta charset="utf-8">
		<title>報修表</title>
		<form action=../index.php method="post">
			姓名:<input type="text" name="n"><br/>
			手機:<input type="text" name="p"><br/>
			E-mail:<input type="text" name="e"><br/>
			寢室床位:武嶺/翠亨<input type="text" name="d">村/棟<input type="type" name="r">室<input type="type" nmae="b">床<br/>
			維修時段:<select name="w">
  					<option value="" selected="selected">&lt;--請選擇--&gt;</option>
 					<option value="1">星期一</option>
  					<option value="2">星期二</option>
  					<option value="3">星期三</option>
  					<option value="4">星期四</option>
  					<option value="5">星期五</option>
				</select>
				<select name="t">
  					<option value="" selected="selected">&lt;--請選擇--&gt;</option>
  					<option value="1">19:00~20:00</option>
  					<option value="2">20:00~21:00</option>
  					<option value="3">21:00~22:00</option>
  					<option value="4">22:00~23:00</option>
				</select><br/>
			<h3>若網管人員前往維修時，寢室無人，則請舍監監督維修!!!</h3><br/>
			備註(選填):<br/><textarea cols="20" rows="10" name="m"></textarea><br/>
			
			<input type="submit"/></form>
	</head>
	<body onload="suc()">
	</body>
</html>
<?php
	$q1=$_POST["q1"];
	$q2=$_POST["q2"];

