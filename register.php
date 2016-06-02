<?php 
     session_start();
require_once("connecttodb.php");

     if(isset($_POST['nickName'])){
         $nickname = $_POST['nickName'];
         $login = $_POST['Login'];
         $password = $_POST['Password1'];
         $query = mysql_query("SELECT * FROM login_password WHERE login= '$login'");
         $num_rows = mysql_num_rows($query);
         if($num_rows != 0) echo 0;
         else {
            $query2 = mysql_query("INSERT INTO login_password VALUES('','$nickname','$login','$password')")or die(mysql_error());   
            //$arr = mysql_fetch_assoc($query);
            //$_SESSION['id'] = $arr['id'];
            $_SESSION['nickname'] = $nickname;
            $_SESSION['login'] = $login;
            echo 1;
        }
  //$query = mysql_query("INSERT INTO login_password VALUES('','$nickname','$login','$password')")or die(mysql_error());   
    }
    mysql_close();
   // if($query) echo 1;
    //else echo 0;
    /*if(isset($_POST['enter'])){
         	$e_login = $_POST['e_login'];
         	$e_password = $_POST['e_password'];

         	$query = mysql_query("SELECT * FROM login_password WHERE login= '$e_login'");
         	$user_data = mysql_fetch_array($query);
         	if($user_data['password']==$e_password) {echo "ok";}
         	else 
         		{echo 'password or login is wrong';}
        }*/
?>    