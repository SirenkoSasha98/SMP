<?
session_start();
require_once("connecttodb.php");
 $login= $_POST['login']; 
 $pass = $_POST['pass'];
 
 $sql_query = "SELECT * FROM login_password WHERE login ='".$login."' AND password = '".$pass."'";
 $sql = mysql_query($sql_query);
 $num_rows = mysql_num_rows($sql);
mysql_close();
 if($num_rows > 0){

 	$arr = mysql_fetch_assoc($sql);

 	$_SESSION['id'] = $arr['id'];
 	$_SESSION['nickname'] = $arr['nickname'];
 	$_SESSION['login'] = $arr['login'];

 	echo 1;

 }else{

 	echo 0 ;
 
 }
 ?>