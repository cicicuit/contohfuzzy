<!DOCTYPE html>
<html>
<head>
	<title>fuzzy</title>
</head>
<body>
	<h1>
		belajara fuzzy
	</h1>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			kurva Naik <input type="text" name="aNaik" placeholder="Nilai Min"><input type="text" name="bNaik" placeholder="Nilai Max"><input type="text" name="xNaik" placeholder="Nilai Input"><br>
			kurva Naik <input type="text" name="aTurun" placeholder="Nilai Min"><input type="text" name="bTurun" placeholder="Nilai Max"><input type="text" name="xTurun" placeholder="Nilai Input"><br>
			<input type="submit" value="CEK" name="cek" />
		</form>
	<?php
	require 'fungsi.php';

	if(isset($_POST['cek'])) {
		$aNaik = $_POST['aNaik'];
		$bNaik = $_POST['bNaik'];
		$xNaik = $_POST['xNaik'];

		$aTurun = $_POST['aTurun'];
		$bTurun = $_POST['bTurun'];
		$xTurun = $_POST['xTurun'];
	}

	echo "Representasi kurva naik : ".kurvaNAik($aNaik,$bNaik,$xNaik);
	echo "<br>Representasi kurva turun: ".round(kurvaTurun($aTurun,$bTurun,$xTurun ),3);
	?>
</body>
</html>