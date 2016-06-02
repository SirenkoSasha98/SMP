<?

    session_start();
    require_once("connecttodb.php");

    $login = $_SESSION['login']; 
    $query = mysql_query("SELECT * FROM notes WHERE login = '$login'");
    //$row = mysql_fetch_array($query );
    while($row = mysql_fetch_array($query)){
    $arrnote[$row['id'].""]=$row['note'];
    }

    echo json_encode($arrnote); 
?>