<?php 
	$movies = array("Titanic", "Matrix", "Notebook");
	$movies[] = "Black Mirror";


	function print_separated($str, $sep=", ") {
		if(strlen($str)>0) {
			print $str[0];
			for($i=1;$i<strlen($str);$i++) {
				print $sep . $str[$i];
			}
		}
	}
?>