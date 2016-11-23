<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus 4_3</title>
</head>
<body>
	<?php
	echo "Segitiga Setengah Kiri<br>";
	echo "</br>";
	for ($x = 5; $x > 0; $x--){
		echo '';
		for($y = $x; $y < 6; $y++){
			echo '*';
		}
		echo '<br/>';
	}
	echo "<br/>";
	echo "Segitiga Setengah Kanan<br>";
	echo "</br>";
	for ($x=1; $x <=5 ; $x++) {
 		for ($y=4; $y>=$x ; $y--) {
 			echo "&nbsp;&nbsp;";
 		}
		for ($z=1; $z <=$x ; $z++) {
 			echo "*";
 		}
 	echo "<br>";
	}
	echo "<br/>";
	echo "Segitiga Penuh<br>";
	echo "</br>";
	for ($x = 0; $x < 5; $x++) {
 		for ($y = 5; $y > $x; $y--) {
 			echo '&nbsp;';
 		}
 		for ($z = 0; $z <= $x; $z++) {
 			echo '*';
 		}
 		echo '<br/>';
 	}
	?>
</body>
</html>