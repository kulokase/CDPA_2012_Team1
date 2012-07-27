<html>
	<head>
                <meta charset="utf-8"/>
                <title>查詢IP設定</title>
		<link rel="stylesheet" type="text/css" herf="teach.css"/>
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
				<legend>輸入IP設定資訊(目前實裝武嶺一村201室1-4床、翠亨E棟101室1-4床)</legend>
				<img align="right" src="IMG/teach/Contrast.gif" width="164" height="120" title="寢室床位對照表" />
				<p>宿舍棟別：
				<select name="dorm">
					<option value="--請選擇--"></option>
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
			</form>
               	 </div>
        </body>
</html>

