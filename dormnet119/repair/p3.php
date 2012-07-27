<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript">
			function suc() {
				alert("您已報修成功"<br/>"以下為查詢碼"<br/>$c<br/>"請妥善保管!!!"<br/>"已寄送此查詢碼至您的信箱")
			}
		</script>
                <style type="text/css">
                	h3 {color:red;}
                </style>
		<title>報修表</title>
 	</head>
        <body >
                <h1><big><center>報修表<center></big></h1>   
                <hr/><hr/> 
                <div style="color:blue ; ">   
               		<form action=../index.php method="post">
		        	<ul>
                			<li>姓名:<input type="text" name="n"><br/></li>
					<li>手機:<input type="text" name="p"><br/></li>
					<li>E-mail:<input type="text" name="e"><br/></li>
					<li>寢室床位:
					<select name="d">
 						<option value="" selected="selected">&lt;--請選擇--&gt;</option>
  						<option value="1">武嶺一村</option>
						<option value="2">武嶺二村</option>
 						<option value="3">武嶺三村</option>
  						<option value="4">武嶺四村</option>
  						<option value="A">翠亨A棟</option>
  						<option value="B">翠亨B棟</option>
  						<option value="C">翠亨C棟</option>
		  				<option value="D">翠亨D棟</option>
  						<option value="E">翠亨E棟</option>
  						<option value="F">翠亨F棟</option>
  						<option value="G">翠亨G棟</option>
 		 				<option value="H">翠亨H棟</option>
  						<option value="L">翠亨L棟</option>
  					</select><input type="text	" name="r">室  
					<select name="b">
  						<option value="" selected="selected">&lt;--請選擇--&gt;</option>
 						<option value="1">1</option>
  						<option value="2">2</option>
  						<option value="3">3</option>
  						<option value="4">4</option>
  					</select>床<br/>
					</li>
					<li>維修時段:
					<select name="w">i
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
					</li>
				<h3>若網管人員前往維修時，寢室無人，則請舍監監督維修!!!</h3><br/>
					<li>備註(選填):</li><textarea cols="20" rows="10" name="m"></textarea><br/>
				</ul>		
				<input type="submit" onclick="self.location.href='../index.php'"/>
                        </form>
		</div> 
	</body>
</html>

