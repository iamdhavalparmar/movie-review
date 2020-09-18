<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="site.php" method="get">
		Name:<input type="text" name="name">
		<input type="submit">

		<? php 
			echo $_GET["name"]
		?>
</body>
</html>