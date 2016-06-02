<?
session_start();
require_once("connecttodb.php");
?>
 <html>
 <head>
     <meta charset="utf-8">
  <title>Тестируем PHP</title>
  <head>
<meta http-equiv ="Content-Type" charset='utf-8'>
<link href="style.css" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="scriptnote.js"></script>
	<script src="onload.js"></script>
	<script src="delete.js"></script>
	<script src="update.js"></script>
</head>
<body>
	<header>
		<div class="welcome">Welcome, <?php
	        echo $_SESSION['nickname']."";     
	 ?>!</div>
		<nav>
			<div class="logout" id="logout">Log out</div>
		</nav>
	</header>
	<div id="textarea">
	    <textarea id ="text" placeholder="Write a note..."></textarea><br>
	    <button class = "clickButtonNote">Создать</button>
		<div id ='mydiv'>
			<div id ='updatenote'>
			<textarea id ="texthidden" placeholder="Chenge a note"></textarea><br>
			<button class="update">Save</button>
			</div>
		</div>
	</div>

</body>
</html>
