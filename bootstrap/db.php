<?php
	$connection = mysql_connect("localhost", "root", "root");
	$db = mysql_select_db("mitk");
	mysql_set_charset("utf8");
	if(!$connection || !$db)
	{
	exit(mysql_error());
	}
	
	?>