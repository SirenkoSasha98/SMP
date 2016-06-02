<?php 
     $connection=mysql_connect("localhost","root","");
     $db=mysql_select_db("my_bd");
     mysql_set_charset("utf8");
     if(!$connection||!$db){
         exit(mysql_error());
     }
     if(isset($_POST['submit'])){
         
     }
 ?>    
<form method="post" action="register.php">
	<input type="text" name="nickname" placeholder="Nickname" required/><br>
	<input type="text" name="login" placeholder="login" required/><br>
	<input type="text" name="password" placeholder="password" required/><br>
	<input type="text" name="r_password" placeholder="repeat password" required/><br>
	<input type="submit" name="submit" value="Register"/>
</form>