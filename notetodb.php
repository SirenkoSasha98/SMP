<?
session_start();
?>
<?

 		require_once("connecttodb.php");

 		$login = $_SESSION['login']; 
 		$note = $_POST['Note'];
        $query = mysql_query("INSERT INTO notes(id,login,note) VALUES(' ', '$login','$note')")or die(mysql_error());
        $select = mysql_query("SELECT id FROM notes WHERE login = '$login' AND note = '$note' LIMIT 1")or die(mysql_error());
        $arr = mysql_fetch_array($select);
        if($query){
        	echo $arr[0] ;
        }else{
        	echo 0;
        }

 ?>
