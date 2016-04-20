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
     
    $result = mysql_query(" SELECT * FROM password WHERE id = '1' ");
    $result2 = mysql_query(" SELECT * FROM notes ");
   mysql_close();
    
  while($row = mysql_fetch_array($result)) {
      echo $row['login']."<br>"; 
     
  }
  $row2 =  mysql_fetch_array($result2);
  echo $row2['note'];
     
?>
 </body>
</html>