<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">


		<title><?php echo _("首頁"); ?></title>


	</head>
	<body style="background: url(IMG/index/k18.gif)" >

		<center>
		<br/>

                <input name="submit"   type=submit  style="border: 0px solid #BB9EF8;color :#333333;height:45px; width: 160px; background:  url(IMG/index/cat.gif); font-size: 26px; color: green; " value= "<?php echo _("報修點我");?>"  onclick="window.open('repair/p1.php');"/>
        	<input name="submit"   type=submit  style="border: 0px solid #BB9EF8;color :#333333;height:45px; width: 160px; background:  url(IMG/index/cat.gif); font-size: 26px ;color: green" value=<?php  echo _("進度查詢"); ?> onclick="window.open('search.php');"/>
        	<input name="submit" type=submit style="border: 0px solid #BB9EF8;color :#333333;height:45px; width: 160px; background:  url(IMG/index/cat.gif); font-size: 26px; color: green" value="<?php echo _("教學點我"); ?>"  onclick="window.open('teach.html');">
<br/><br/><br/>
		<span style= "color:red"><font size = "5"><strong><?php echo _("流量Top100!!"); ?></strong></font></span><br/><br/>

		<iframe src="data_base.php" width="320" height="570"></iframe>
	<br/><span style= "color:darkviolet"><font size = "3"><?php echo _(" 搜尋IP善用"); ?><strong><?php echo _( " Ctrl+F5 " );?> </strong></font></span><br/><br/>
</center>
</body>
</html>
