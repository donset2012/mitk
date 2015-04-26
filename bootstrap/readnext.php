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

 <div class="container" style="margin-top: 0px;">

 <div class="navbar navbar-static-top">
	<nav class="navbar-inner">
		<ul class="nav nav-pills">
		<li class="divider-vertial"</li>
			<li class="active"><a href="index.php">Новости</a></li>
			<form class="navbar-form pull-right">
			<span class="glyphicon glyphicon-search"></span>
			<input 
			onblur="this.value=(this.value=='')?this.title:this.value;"
			onfocus="this.value=(this.value==this.title)?'':this.value;"
			type="text" class="span2 search-query"
			value="Поиск"
			title="Поиск"/>
		</ul>
	<nav class="navbar navbar-fixed-bottom" role="navigation">
			
 <div class="pager">
  <li class="previouspage"><a href="#" id="previous">Предыдущая</a></li>
  <li class="active"><a href="#">Текущая</a></li>
  <li class="nextpage"><a href="#" id="next">Следующая</a></li>
 </div>
	</nav>
	
	<div id="carousel" class="carousel slide">
	<ol class="carousel-indicators">
	<li class="active" data-target="#carousel" data-slide="0"></li>
	<li data-target="#carousel" data-slide="1"></li>
	<li data-target="#carousel" data-slide="2"></li>
	</ol>
	
	<div class="carousel-inner">
	<div class="item active"><img src="img/1.jpg" alt="Image">
	<div class="carousel-caption">
	</div></div>
	
	<div class="item"><img src="img/2.jpg" alt="Image">
	<div class="carousel-caption">
	</div></div>
	
	<div class="item"><img src="img/3.jpg" alt="Image">
	<div class="carousel-caption">
	</div></div>
	</div>
	
	<a href="#carousel" class="left carousel-control" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a href="#carousel" class="right carousel-control" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
 </div>
<br>
  </div>
 </div>
 
<?php
include_once("db.php");
 $id = $_GET['id'];
	$result = mysql_query("SELECT * FROM news 
						WHERE id='$id'	");
						$row = mysql_fetch_array($result);
	mysql_close();
	{?>

	<div class="container" style="margin-top: 0px;">
	<h1><?php echo $row['title']?></h1>
	<p><?php echo $row['text']?></p>
	
	<a href="edit.php?id=<?php echo $row ['id']?>">Редактировать новость</a><br />
	<a href="delete.php?id=<?php echo $row ['id']?>">Удалить новость</a><br /><br>
	<hr />
	</div>
	<?php	
	}
	?>
	
</body>
 </html>