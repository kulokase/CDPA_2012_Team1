<html>
	<head>
        	 <meta charset = "utf-8"> 
        	 <title> 前置檢查 </title>
     	 	 <style type="text/css">
      		 	h2 {color:red;}
       		 </style>
	</head>
	<body>
		<center>
		<h1>前置檢查</h1>
		<br/><br/>

		<h2>如因超流或其他違規行為被鎖網，網推會將不提供報修服務!</h2>
		<br/><br/>
		<marquee>CDPA</marquee>
		<table>
			<tr>
				<th>問題：</th>
				<th>Y</th>
				<th>N</th>
			</tr>
			<tr>
				<form  method="get">
					<td>將自己的電腦連接同房的網孔後是否能連線: </td>
					<td><input type = "radio" name="check1" id="y" /></td>
					<td><input type = "radio" name="check1" id="n"/><br/></td>
				</form>
			</tr>
			<tr>
				<form method="get">
               		 	        <td>將別人的電腦連接自己的網孔後是否能連線: </td>
               	        		<td><input type = "radio" name="check2" id="y"  /></td>
               	        		<td><input type = "radio" name="check2" id="n"/><br/></td>
          		      </form>
			</tr>
		</table>
		<br/><br/><br/>
		<input type="submit" value="送出"  onclick="self.location.href='p3.php'"/>
		</center>
	</body>
</html>
