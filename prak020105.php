<html>
<head>Headings</head>
<body>
	<?php
	$i=1;
	do{
		if($i % 2 == 0){
		$color = "red";
	}
		else{
		$color = "black";
	}
		echo"<h".$i."><font color = $color>Heading ".$i."</font></h".$i.">";
	$i++;
	}
	while($i<=6);
	?>
</body>
</html>