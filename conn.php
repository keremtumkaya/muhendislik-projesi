<?php
   $serv = "localhost";
   $user = "root";
   $pass = "tuvalet1";
   $baglan = @mysql_connect($serv,$user,$pass) or die("Veri tabanına bağlanamadı");
   @mysql_select_db('test',$baglan);

mysql_query("SET CHARACTER SET 'utf8' ");
mysql_query("SET NAMES  UTF8");

?>


