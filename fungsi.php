<?php  
	function kurvaNAik ($a,$b,$x){
		if ($x<=$a) {
			return 0;
		} elseif ($a<=$x & $x<=$b) {
			return ($x-$a)/($b-$a);
		} elseif ($x>=$b) {
			return 1;
		}
	}
	
	function kurvaTurun($a,$b,$x){
		 if ($a<=$x & $x<=$b) {
		 	return ($b-$x)/($b-$a);
		 } elseif ($x<=$b) {
		 	return 0;
		 }
	}
?>