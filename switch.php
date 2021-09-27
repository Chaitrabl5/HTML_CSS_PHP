<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	 $d=date("D");
	 SWITCH($d){
	 	case "Mon":
	 	  echo "Today is Monday";
	 	  break;
	 	case "Tue":
	 	  echo "Today is Tuesday";
	 	  break;
	 	case "Wed":
	 	  echo "Today is Wednesday";
	 	  break;  
	 	case "Thu":
	 	  echo "Today is Thursday";
	 	  break; 
	 	case "Fri":
	 	  echo "today is Friday";
	 	  break;  
	 	case "Sat":
	 	  echo "Today is Saturday";
	 	  break;
	 	case "Sun":
	 	  echo "Today is Sunday";
	 	  break;   
	 	default:
	 	  echo "wonder which day is this?";
	 	 
	 }
	 ?>

</body>
</html>