<style>

    #genel{
     text-align: center;
       
    }
    
</style>
<?php require_once("conn.php"); ?>
<?php



echo '<div id="genel">

<form action="" method="post">



<td><label for="id">İD : </label></td>
<td><input type="text" class="i1" name="id" id ="id"/></td>
<br><br>

<td><input type="submit" name="sil" class="s1" value="SİL"  /> </td>
 <td><a href="index.php"><input type="button" value="GERİ" id="" ></a></td>







</form>' ;
 
 if(@$_POST["sil"]){
	 
	 $id=$_POST["id"];
	 if(!empty($id)) {
		 
         $kaydet=mysql_query("DELETE FROM mytesttable WHERE id={$id}");
           
           
	 if($kaydet){
		 
	  echo 'İD Sİ=' .$id.'<font style="color:blue"> OLAN KİŞİ SİLİNDİ. </font>'; 
	 
      }else {
           echo mysql_error();
          }
     
 }
 }

 
echo '</div>';
?>

   


