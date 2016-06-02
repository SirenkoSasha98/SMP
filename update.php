<?
session_start();
require_once("connecttodb.php");

$note = $_POST['note'];
$id = $_POST['id'];
$query = mysql_query("UPDATE notes SET note = '$note' WHERE id = '$id' ");
?>