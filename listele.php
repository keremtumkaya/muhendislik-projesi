<style>

    .panel-heading{
        
        text-align: center;
    }
    #goster{
        
        color: blue;
    }

</style>

<div class="panel-heading" style="">
	<div class="row">
      <div class="col-xs-6">
		<input type="button" value="TÜMÜNÜ LİSTELE" id="btn1"><br /><br>
           <input type="text" name="pid" id="pid"><input type="button" value="LİSTELE" id="btn2">
               <br><br>
       </div>
     </div>  				
 

   <p id="goster"></p>

        <a href="index.php"><input type="button" value="GERİ" id="" ></a>
       
          </div> 
      
         
                   


                    

<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" language="javascript">

$("#btn1").live("click",function(){
	var txt = "";	
	$.ajax({	
		type:"GET",
      contentType: "application/json",
      dataType: "json",
		url:"http://localhost/muh_proje/service/personController.php",
		data:"view=all",
		success:function(data){
			for (x in data)
             txt +="İD = "+data[x].id +"=>kullanıcı adı = "+data[x].username + "<br>"; 
         document.getElementById("goster").innerHTML = txt;;
		}
	});
	
});

$("#btn2").live("click",function(){
  
   var pid = $("#pid").val();
   var txt = "";
   $.ajax({   
      type:"GET",
      contentType: "application/json",
      dataType: "json",
      url:"http://localhost/muh_proje/service/personController.php",
      data:"view=single&id="+pid,
      success:function(data){
         for (x in data)
              txt += "İD = "+data[x].id +"=>kullanıcı adı = "+data[x].username + "<br>";
         document.getElementById("goster").innerHTML = txt;
      }
   });
   
});
     
    </script>
    
