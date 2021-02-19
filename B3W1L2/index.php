<!DOCTYPE html>
<html>
<head>
	<title>Hello world</title>
</head>
<body>
<?php
	echo '<h1>'."hello world!".'</h1>';
?>
<?php
define("helloWorld", '<h1>'."hello world!".'</h1>'); 
echo helloWorld;
?>
</body>
</html>