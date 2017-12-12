<?php
	$a = 45;
	$b = 50;

	function number($a, $b){
		if($a > $b){
			echo 'Le premier nombre est plus grand.';
		}elseif($a < $b){
			echo 'Le premier nombre est plus petit.';
		}else{
			echo 'Les deux nombres sont identiques.';
		}
	}

	number($a,$b);
?>