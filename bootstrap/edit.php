<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Редактирование новости</title>
 </head>
 
 <body>
 
 <?php
 include_once("db.php");
 $id = $_GET['id'];
 $result = mysql_query(" SELECT * FROM news 
						WHERE id='$id' ");
	
	
	$row = mysql_fetch_array($result);
	
	if(isset($_POST['save']))
	{
		$title = strip_tags(trim($_POST['title']));
		$text = strip_tags(trim($_POST['text']));
		
		mysql_query(" UPDATE news SET title='$title', text='$text' WHERE id='$id' ");
		mysql_close();
	}

	?>
	
	<form method="post" action="edit.php?id=<?php echo $id; ?>">
 Название новости <br />
 <input type="text" name="title" value="<?php echo $row['title']; ?>" /><br />
 Текст новости <br />
  <textarea cols="40" rows="10" name="text"><?php echo $row['text']; ?></textarea><br />
  
   <input type="submit" name="save" value="Сохранить" />
 </form>

 </body>
 </html>