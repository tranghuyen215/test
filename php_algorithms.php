<?php
	$a = array();
	
	$a[0] = 5;
	$a[1] = 3;
	$a[2] = 1;
	$a[3] = 3;
	$a[4] = 8;
	$a[5] = 7;
	$a[6] = 4;
	$a[7] = 1;
	$a[8] = 1;
	$a[9] = 3;
	
	$len = sizeof($a);


	for ($i= 0; $i < $len - 1 ; $i++) {
		for ($j = 0 ; $j < $len-$i-1 ; $j++) {
			if( $a[$j] < $a[$j+1]) {
				$temp = $a[$j];
				$a[$j] = $a[$j+1];
				$a[$j+1] = $temp;
				
			}
		}
	}

	
	foreach ($a as $key => $value) {
		echo $key." => ".$value." ";
	}

?>
