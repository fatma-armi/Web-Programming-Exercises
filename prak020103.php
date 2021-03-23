<html>
<head>Headings</head>
<body>
	<?php
	for($i=1;$i<=6;$i++){
		if($i % 2 == 0){
		$color = "red";
	}
		else{
		$color = "black";
	}
		echo"<h".$i."><font color = $color>Heading ".$i."</font></h".$i.">";
	}
	?>
</body>
</html>