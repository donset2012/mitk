<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Удаление новости</title>
 </head>
<?php

include_once("db.php");

$id = $_GET['id'];

mysql_query(" DELETE FROM news WHERE id='$id' ");

mysql_close();

echo "Новость успешно удалена.";

?>
