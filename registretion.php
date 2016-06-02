<?
session_start();
require_once("connecttodb.php");
?>
<html>
<head>

<link href="style.css" rel="stylesheet">
<meta http-equiv ="Content-Type" charset='utf-8'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script  type = "text/javascript" src = "script.js">
</script>
</head>
<body>
	<?
	if(isset($_SESSION['nickname'])){
		$id_session = $_SESSION['nickname'];
		echo "Your id number:".$id_session."";
	}else{
		echo "Ваша сессия отсуцтвует".$id_session;
	}
	?>
	<header>
		<div class="welcome">Notes. Look to the future</div>

	</header>
	<div id='parent'>
		<div id='registration'>
			<form role="form">
			 <div class="form-group">
			  <label for="email">Login</label>
			  <input type="text" class="form-control" id = "name_login" placeholder="Login">
			 </div>
			 <div class="form-group">
			  <label for="pass">Password</label>
			  <input type="password" class="form-control" id="password_login" placeholder="Password">
			 </div>
			    <div class="checkbox">
    				<label>
    				 <input type="checkbox"> Запомнить меня
    				</label>
   				</div>
				 <button  id="clickButtonLoginForm" class="btn btn-success">Log In</button>
			</form>

			<form role="form">
			 <div class="form-group">
			  <label for="email">Nickname</label>
			  <input type="text" class="form-control" id = "nickname" placeholder="Nickname">
			 </div>
			 <div class="form-group">
			  <label for="email">Login</label>
			  <input type="email" class="form-control" id="login" placeholder="Login">
			 </div>
			 <div class="form-group">
			  <label for="email">Password</label>
			  <input type="password" class="form-control"id = "password1" placeholder="Password">
			 </div>
			 <div class="form-group">
			  <label for="pass">Password</label>
			  <input type="password" class="form-control" id = "password2" placeholder=" Repeat password">
			 </div>
			 <button  id ="clickButtonForm" class="btn btn-success">Sign up</button>
			</form>
				<!--<input type="text" id = "nickname" name="nickname" placeholder="Nickname" required/><br>
				<input type="text" id="login" name="login" placeholder=" Login" required/><br>
				<input type="password" id = "password1" name="password1" placeholder=" Password" required/><br>
				<input type="password" id = "password2" name="password2" placeholder=" Repeat password" required/><br>
				<button class="clickButtonForm">Зарегистрироваться</button>-->
 		</div>
 		<!--<div style="margin-top: 20 px">
				<input type="text" id = "name_login" name="e_login" placeholder=" Login" required/><br>
				<input type="password" id="password_login" name="password" placeholder=" Password" required/><br>
				<button class="clickButtonLoginForm">Войти</button>
	    </div>-->
	    <span id="error" class=""></span>
    </div>
</body>
</html>