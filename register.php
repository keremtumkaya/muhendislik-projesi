<?php
include_once('conn.php');
error_reporting(E_ALL);

//değişkenleri buraya getirdik
$username = isset($_POST['username']) ? mysql_real_escape_string($_POST['username']) :  "";
$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) :  "";
$password = isset($_POST['password']) ? mysql_real_escape_string($_POST['password']) :  "";

//değişkenleri buraya aldık
$insertstatement = 'INSERT INTO `mytesttable`(`id`,`username`,`email`,`password`) VAlUES (NULL,"'.$username.'","'.$email.'","'.$password.'")';

$query123 = mysql_query($insertstatement) or trigger_error(mysql_error()." ".$insertstatement);



?>