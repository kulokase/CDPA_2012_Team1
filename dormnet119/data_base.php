<meta http-equiv="refresh" content=300> 
<?php 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, "http://top100.cdpa.tw/ajax.php");
	curl_setopt($ch, CURLOPT_HEADER, false);
	$output = curl_exec($ch);
	curl_close($ch);
	$cart = json_decode( $output );
?>
<table border ="1" align = "center">
		<tr>
			<th>rank<th/>
			<th>ip<th/>
			<th>流量(Gib)<th/>
			<th>封包數<th/>
		<tr/>
	<?php
		$rank =1;
		foreach( $cart as $tmp){
			$i = (float)$tmp->octets /1024/1024/1024; 
			echo "<tr>
				<td>$rank<td/>
				<td>$tmp->ip<td/>
				<td>".sprintf("%.3f",$i)."<td/>
				<td>$tmp->packets<td/>
			      <tr/>";
			$rank++;
		} 
	?>
<table/>
