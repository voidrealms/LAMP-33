<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

class mammal
{
	public $hasbackbone = true;
	public $hashair = true;
}

class cat extends mammal
{
	function speak()
	{
		echo "meow<br>";
	}
}

class lion extends cat
{
	function roar()
	{
		echo "roar!!!<br>";
	}
}

class dog extends mammal
{
	function speak()
	{
		echo "bark<br>";
	}
}

$mycat = new cat();
$mydog = new dog();
$mylion = new lion();

//$mycat->speak();
//$mydog->speak();

$mylion->speak();
$mylion->roar();

?>

</body>
</html>
