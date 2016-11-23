<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus 4_1</title>
</head>
<body>
	<?php
	$n = 101;
	if (($n>=0) && ($n<=59)) {
		echo "Cukup";
	} elseif (($n>=60) && ($n<=85)) {
		echo "Baik";
	} elseif (($n>=85) && ($n<=100)) {
		echo "Baik Sekali";
	} else {
		echo "Input Salah";
	}
	?>
</body>
</html>