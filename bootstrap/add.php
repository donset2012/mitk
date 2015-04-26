<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Добавление новости</title>
 </head>
 
 <body>
 
 <form method="post" action="add.php">
 Название новости <br />
 <input type="text" name="title" /><br />
 Текст новости <br />
  <textarea cols="40" rows="10" name="text"></textarea /><br />
  
   <input type="submit" name="add" value="Добавить" />
 </form>
 
 <?php
 include_once("db.php");
 if(isset($_POST['add']))
 {
	$title = strip_tags(trim($_POST['title']));
	$text = strip_tags(trim($_POST['text']));
 
	mysql_query(" INSERT INTO news(title, text) VALUES ('$title', '$text') ");
	mysql_close();
	echo "Новость успешно добавлена.";
}

 
	?>
 
 </body>
 </html>