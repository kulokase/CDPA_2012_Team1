<html>
	<head>
		<meta charset="utf-8"/>
		<title>查詢IP設定</title>
		<style type="text/css">
		div.content table {
			font-style: normal;
			width: 100%;
			font-weight: bold;
			text-align: center;
			margin: 0px;
			padding: 0px;
			font-size: 0.8em;
		}

		div.content table thead, div.content table tr.even{
			background-color: rgb(204,204,204);
		}
		
		div.content table td, div.content table th{
			padding: 0.4em;
			border-right: 1px solid rgb(0,0,0);
		}

		div.content table .lastcol{
			border-right: none;
		}
		</style>
	</head>

	<body>
		<div class="content">
		<h2>IP設定教學</h2>
		<h3>以下為詳細IP設定資訊</h3>
		<table summary="IP設定資訊" cellspacing="0">
		<thead>
		<tr>
			<th>寢室床位</th>
			<th>IP位置</th>
			<th>子網路遮罩</th>
			<th>慣用閘道</th>
			<th class="lastcol">慣用DNS伺服器</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<?php
			        /* Connect to an ODBC database using driver invocation */
			        $dsn = 'mysql:dbname=team1GuestDB;host=127.0.0.1';
			        $user = 'team1GuestDB';
			        $password = 'team1GuestPass';

			        try {
			            $dbh = new PDO($dsn, $user, $password);
			        }
			        catch (PDOException $e) {
			                echo 'Connection failed: ' . $e->getMessage();
			        }
				
				$id = $_POST['dorm'];
				$room = $_POST['room'];
				$bed = $_POST['bed'];
				//echo $id . '<br/>' . $room . '<br/>' . $bed . '<br/>';
				$sql = "SELECT * FROM `dorm` WHERE `id` = :id AND (`room`= :room AND `bed` = :bed)";
				$stm = $dbh->prepare($sql);
				$stm->execute(array(':id' => $id, ':room' => $room, ':bed' => $bed));
				$result = $stm->fetchAll();
				if(empty($result)){
					echo '<td>' . "不存在此床位" . '</td>';
				}
				else{
					foreach($result as $tmp){
						echo '<td>' . $tmp['bed'] . '</td>' .
						     '<td>' . $tmp['ip'] . '</td>' .
						     '<td>' . $tmp['subnetmask'] . '</td>' .
						     '<td>' . $tmp['gateway'] . '</td>' .
						     '<td class="lastcol">' . '140.117.11.1' . '</td>';
					}
				}
			?>
		</tr>
		

		</tbody>
		</table>
	<h3 class="formnote">IP設定方式   <a href ="#XP">Windows XP</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href ="#Win7">Win7</a></h3>
	<ul>
	<li><a name ="XP"><font size="4">Windows XP-IP設定步驟 </font></a>
		<ul>
			<li>開始 > 設定 > 網路連線 </li>
			<li><img alt="Windows XP-IP設定步驟圖片1" title="Windows XP-IP設定步驟圖片1"
				 src="IMG/teach/XP_config1.jpg" />
			</li>
			<li>在開啟的視窗中，尋找您正要設定的連線(通常為區域連線) > 右鍵 > 內容</li>
			<li><img alt="Windows XP-IP設定步驟圖片2" title="Windows XP-IP設定步驟圖片2" 
				 src="IMG/teach/XP_config2.jpg" />
			</li>
			<li>找出「Internet Protocol(TCP/IP)」>  點選 "內容"</li>
			<li><img alt="Windows XP-IP設定步驟圖片3" title="Windows XP-IP設定步驟圖片3" 
				 src="IMG/teach/XP_config3.jpg" />
			</li>
			<li>在開啟的視窗中，鍵入上面的ip設定資訊。並依圖打上建議的「DNS伺服器」</li>
			<li><img alt="Windows XP-IP設定步驟圖片4" title="Windows XP-IP設定步驟圖片4" 
				 src="IMG/teach/XP_config4.jpg" />
			</li>
		</ul>
	</li>
</ul>







	<li><a name ="Win7"><font size ="4">Windows 7-IP設定步驟</font></a>
        	<ul>
  			<li>開始 > 控制台</li>
			<br/>
  			<li><img alt="Windows 7-IP設定步驟圖片1" title="Windows XP-IP設定步驟圖片1"
		 		 src="IMG/teach/win7_config1.jpg" />
 			</li>
			<li>點選"檢視網路狀態及工作"</li>
			<br/>
			<li><img alt="Windows 7-IP設定步驟圖片2" title="Windows XP-IP設定步驟圖片2" 
		 		 src="IMG/teach/win7_config2.jpg" />
			</li>
			<li>點選"變更介面卡設定"</li>
			<br/>
			<li><img alt="Windows 7-IP設定步驟圖片3" title="Windows XP-IP設定步驟圖片3"
		 	 	 src="IMG/teach/win7_config3.jpg" />
			</li>
			<li>在區域連線點選右鍵</li>
			<br/>
			<li><img alt="Windows XP-IP設定步驟圖片4" title="Windows XP-IP設定步驟圖片4"
		 	 	 src="IMG/teach/win7_config4.jpg" />
			</li>
			<li>點選內容</li>
                        <br/>
                        <li><img alt="Windows XP-IP設定步驟圖片4" title="Windows XP-IP設定步驟圖片4"
                                 src="IMG/teach/win7_config5.jpg" />
                        </li>
			<li>點選"網際網路通訊協定第4版"(TCP/IPv4) > 接著點內容</li>
                        <br/>
                        <li><img alt="Windows XP-IP設定步驟圖片4" title="Windows XP-IP設定步驟圖片4"
                                 src="IMG/teach/win7_config6.jpg" />
                        </li>
			<li></li>
                        <br/>
                        <li><img alt="Windows XP-IP設定步驟圖片4" title="Windows XP-IP設定步驟圖片4"
                                 src="IMG/teach/win7_config7.jpg" />
                        </li>

		</ul>
	</li>
</ul>
</body>

</html>
