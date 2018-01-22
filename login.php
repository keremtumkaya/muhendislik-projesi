<?php
include_once('conn.php');
error_reporting(E_ALL);

//Gdeğişkenleri buraya getirdik
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
@$username = $request->username;
@$password = $request->password;


//değişkenleri buraya aldık
$insertstatement = 'SELECT count(*) co FROM `mytesttable` WHERE username="'.$username.'" AND password="'.$password.'"';

$query123 = mysql_query($insertstatement) or trigger_error(mysql_error()." ".$insertstatement);
$hata='KULLANICI ADI VEYA ŞİFRE YANLIŞ';
$bos='BOŞ BIRAKMA';
while($r = mysql_fetch_array($query123)){
			extract($r);

    
}

if(empty($username) or empty($password)){
     echo('BOŞ BIRAKMA');
    
}else{  

$co = (int)$co;
$customer_id = '';
if($co == 1){
    //giriş doğruysa
   
$result = array();
$result[] = array("customer_id" => $customer_id,"status" => 'DOĞRU GİRİŞ');
}

if($co != 1){
    //giriş yanlış ise hata çıktısı ver
   
    $result = array();
$result[] = array("status" => $hata);
}

}



/* başlık çıktısı */
	header('Content-type: application/json');	
    echo json_encode($result);


?>