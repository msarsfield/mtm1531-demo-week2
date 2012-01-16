<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Query String</title>
</head>

<body>

<?php
	echo $_GET["name"];
	echo ' ';
	echo $_GET['lastname']
?>

<a href="name.php?name=Mary">Mary</a>
<a href="name.php?name=Molly">Molly</a>
<a href="name.php?name=Dude">Dude</a>
<a href="name.php?name=Man">Man</a>


</body>
</html>