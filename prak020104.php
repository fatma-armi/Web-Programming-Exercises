<html>
<head>Headings</head>
<body>
	<?php
	$i=1;
	while($i<=6){
		if($i % 2 == 0){
		$color = "red";
	}
		else{
		$color = "black";
	}
		echo"<h".$i."><font color = $color>Heading ".$i."</font></h".$i.">";
	$i++;
	}
	?>
</body>
</html>