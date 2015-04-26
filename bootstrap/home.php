<!DOCTYPE html>
<html>
<head>
 <title>MITK</title>
	<link rel="stylesheet" href="style/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<meta charset="utf-8">
 </head>
 
 <body>
<?php
	$connection = mysql_connect("localhost", "root", "root");
	$db = mysql_select_db("mitk");
	mysql_set_charset("utf8");
	if(!$connection || !$db)
	{
	exit(mysql_error());
	}
	$result = mysql_query(" SELECT * FROM news ");
	mysql_close();
	while($row = mysql_fetch_array($result))
	{?>

		<h1><?php echo $row['title']?></h1>
	<p><?php echo $row['text']?></p>

	<hr />
	<?php	
	}
	?>
	</body>
 </html>