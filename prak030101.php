<?php
function GandakanString($s, $n){
	$i = 0;
	while($i<$n){
		echo "$s";
		$i++;
	}
}

GandakanString("hello", 3);
?>