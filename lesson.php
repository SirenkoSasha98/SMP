<html>
 <head>
     <meta charset="utf-8">
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php 
     $connection=mysql_connect("localhost","root","");
     $db=mysql_select_db("my_bd");
     mysql_set_charset("utf8");
     if(!$connection||!$db){
         exit(mysql_error());
     }
     
  
     $result2 = mysql_query(" SELECT * FROM notes ");
   mysql_close();
    
  //while($row = mysql_fetch_array($result)) {
    //  echo $row['login']."<br>"; 
     
  //}
   while($row = mysql_fetch_array($result2)){
    echo $row['note']."<br>";
  }
     
?>
 </body>
</html>