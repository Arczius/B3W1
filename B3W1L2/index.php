<!DOCTYPE html>
<html>
<head>
	<title>Hello world</title>
</head>
<body>
<?php
	echo '<h1>'."hello world!".'</h1>';
	
	define("helloWorld", '<h1>'."hello world!".'</h1>'); 
	echo helloWorld; 

	$hellowWorld = '<h1>'."Learning PHP".'</h1>';
	echo $hellowWorld;
	$hellowWorld = '<h1>'."hello world!".'</h1>';
	echo $hellowWorld;
?>
<h1>
	<?php
		$hello = "hello";
		$world = " world!";
		echo $hello.$world;
	?>
</h1>
</body>
</html>