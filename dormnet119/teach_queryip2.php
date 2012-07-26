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
			<th>IP Address</th>
			<th>Subnet Mask</th>
			<th class="lastcol">Default Gateway</th>
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
				foreach($result as $tmp){
					echo '<td>' . $tmp['bed'] . '</td>' .
					     '<td>' . $tmp['ip'] . '</td>' .
					     '<td>' . $tmp['subnetmask'] . '</td>' .
					     '<td class="lastcol">' . $tmp['gateway'] . '</td>';
				}
			?>
		</tr>
		</tbody>
		</table>
	</body>

</html>
