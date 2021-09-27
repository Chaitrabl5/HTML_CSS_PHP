<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
       $name=$email=$gender=$comment=$website="";
       if ($_SERVER['request_method']=="post") {
       	$name=test_input($_POST['name']);
       	$email=test_input($_POST['email']);
        $website=test_input($_POST['website']);
        $comment=test_input($_POST['comment']);
        $gender=test_input($_POST['gender']);

       }
       function test_input($value='')
       {
       	// code...
       }
</body>
</html>