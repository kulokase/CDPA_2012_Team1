<html>
	<head>
                <meta charset="utf-8"/>
                <title>查詢IP設定</title>
                <style type="text/css">
                div.content {

                }
                </style>
        </head>
        <body>
                <div class="content">
                <h2>教學 - IP設定</h2>
		<h3 align="center" class="formnote">請選擇寢室資訊<br/>Please enter your information of your dorm.</h3>
		<form name="query" action="./teach_queryip2.php" method="post">
			<fieldset>
			<legend>輸入IP設定資訊</legend>
			<img align="right" src="IMG/teach/Contrast.gif" width="164" height="120" alt="寢室床位對照表" title="寢室床位對照表" />
			<p>宿舍棟別：
			<select name="dorm">
				<option value="--請選擇--"></option>
				<option value="1|255.255.254.0|140.117.193.254">武嶺一村</option>			
				<option value="2|255.255.254.0|140.117.195.254">武嶺二村</option>			
				<option value="3|255.255.254.0|140.117.197.254">武嶺三村</option>			
				<option value="4|255.255.254.0|140.117.199.254">武嶺四村</option>			
				<option value="A|255.255.255.0|140.117.177.254">翠亨A棟</option>			
				<option value="B|255.255.255.0|140.117.178.254">翠亨B棟</option>			
				<option value="C|255.255.255.0|140.117.179.254">翠亨C棟</option>			
				<option value="D|255.255.255.0|140.117.177.254">翠亨D棟</option>			
				<option value="E|255.255.254.0|140.117.181.254">翠亨E棟</option>			
				<option value="F|255.255.254.0|140.117.183.254">翠亨F棟</option>			
				<option value="G|255.255.252.0|140.117.201.254">翠亨G棟</option>			
				<option value="H|255.255.252.0|140.117.187.254">翠亨H棟</option>			
				<option value="L|255.255.252.0|140.117.191.254">翠亨L棟</option>			
			</select>
			</p>
			<p>寢室房號：<input name="room" size="4" maxlength="3" />(Example：202、304)</p>
			<p>寢室床號：
			<select name="bed">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
			</p>
			<p>(請參照右圖判讀床位)</p>
			</fieldset>
			<div id="submitarea">
				<input name="submit" value="前往IP設定教學" type="submit" />
				<input name="reset" value="重設" type="reset" />
			</div>
                </div>
        </body>
</html>

