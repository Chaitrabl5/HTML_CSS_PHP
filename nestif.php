<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
     $d=date("D");
     if($d=="fri")
     	echo "have a nice week-end!";
     elseif($d=="sun")
     	echo "have a nice sunday!";
     else
     	echo "have a nice day!";
     ?>

</body>
</html>