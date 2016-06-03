<?
session_start();
require_once("connecttodb.php");
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet">
<meta http-equiv ="Content-Type" charset='utf-8'>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 

<script  type = "text/javascript" src = "js/script.js">
</script>
</head>
<body>
	<header>
		<div class="welcome">Notes. Look to the future</div>

	</header>
	<div id='parent'>
		<div id='registration'>
			
			 <div class="form-group">
			  <label for="email">Login</label>
			  <input type="text" class="form-control" id = "name_login" placeholder="Login">
			 </div>
			 <div class="form-group">
			  <label for="pass">Password</label>
			  <input type="password" class="form-control" id="password_login" placeholder="Password">
			 </div>
			    <div class="checkbox">
   				</div>
				 <button  id="clickButtonLoginForm" class="btn btn-success">Log In</button>
			

			
			 <div class="form-group">
			  <label for="email">Nickname</label>
			  <input type="text" class="form-control" id = "nickname" placeholder="Nickname">
			 </div>
			 <div class="form-group">
			  <label for="email">Login</label>
			  <input type="text" class="form-control" id="login" placeholder="Login">
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
			
 		</div>
	    <span id="error" class=""></span>
    </div>
</body>
</html>