<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
       $sal = array('mohammad' =>2000 ,"qadir"=>1000,"zara"=>500);
       echo "salary of mohammad is ".$sal['mohammad']."<br/>";
       echo "salary of qadir is ".$sal['qadir']."<br/>";
       echo "salary of zara is ".$sal['zara']."<br/>";
       $sal["mohammad"]="high";
       $sal["qadir"]="medium";
       $sal["zara"]="low";
        echo "salary of mohammad is ".$sal['mohammad']."<br/>";
         echo "salary of qadir is ".$sal['qadir']."<br/>";
          echo "salary of zara is ".$sal['zara']."<br/>";
        ?>

</body>
</html>
<!--
mulidimensional array = which has intersection of rows and columns
--/>