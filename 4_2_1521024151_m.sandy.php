<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus 4_2</title>
</head>
<body>
	<?php
	$kode_b = "MB25";
	switch ($kode_b){
		case "MB25":
			echo "Harga 250.000";
			break;
		case "PR80":
			echo "Harga 750.000";
			break;
		case 'M717':
			echo "Harga 30.000"; # code...
			break;
		case 'MM34':
			echo "Harga 150.000"; # code...
			break;
		case 'K987':
			echo "Harga 35.000"; # code...
			break;
	}
	?>
</body>
</html> 