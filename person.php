<?php
require_once("conn.php");
Class person {
	

	public function getAllPersons(){
      $sonuc = mysql_query("select * from mytesttable");
      if(mysql_num_rows($sonuc)>0){
         while($satir = mysql_fetch_assoc($sonuc))
         {
             $out[] = $satir;
         }
       }
      return $out;
	}
	
	public function getPerson($id){
		 $sonuc = mysql_query("select * from mytesttable where id={$id}");
      if(mysql_num_rows($sonuc)>0){
         while($satir = mysql_fetch_assoc($sonuc))
         {
             $out[] = $satir;
         }
       }
      return $out;
      
	}	
    
}

/*ekleme
    public function insert(){
      $sonuc = mysql_query("insert into person (ad) values('$adi')");
    */
 
    
?>