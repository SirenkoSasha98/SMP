<?
session_start();
require_once("connecttodb.php");
$id = $_POST['id'];
echo $id."";
$query = mysql_query("DELETE FROM notes WHERE id ='$id'")or die(mysql_error());

?>