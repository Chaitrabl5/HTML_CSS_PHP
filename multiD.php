<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
   $marks = array('m' =>array(
 	"phy"=>35,
 	"maths"=>30,
 	"chem"=>39
      ),"q" => array(
      	"phy"=>30,"maths"=>32,"chem"=>29
      ), "z"=>array(
      	"phy"=>31,"maths"=>22,"chem"=>39
      ));
  echo "marks for m in physics:";
  echo $marks['m']['phy']."<br/>";
  echo "marks for m in maths:";
  echo $marks['q']['maths']."<br/>";
  echo "marks for z in chem:";
  echo $marks['z']['chem']."<br/>";
  ?>
</body>
</html>