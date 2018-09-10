<?php
  
	echo "Piramida bintang dengan fungsi rekursif : <br>";
	
	function rekursif2($j,$a){
		global $i;
			if($j > $i - $a){
				echo "*";
				rekursif2($j - 1, $a);
			}
			 
	}

	function rekursif($a){
		global $i;
		rekursif2($i, $a);
		echo "<br>";
		if(--$a > $i){
			rekursif($a);
		}
	}
	$i = 0;
	$nilai=5;
	rekursif($nilai);
	

	echo "<br>Piramida angka dengan fungsi rekursif : <br>";
	$index=5;
	function rekursif3($i,$j,$index){
		if($i<=$index){
			if($j<=$i){
				echo "$j";
				$j++;
				rekursif3($i,$j,$index);
			}else{
				echo "<br>";
				$i++;
				rekursif3 ($i,1,$index);
			}
		}
	}
	rekursif3(1,1,$index);

?>
