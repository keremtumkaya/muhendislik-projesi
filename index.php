<?php include("conn.php"); 
    
 ?>

<html ng-app="myangularapp" ng-controller="myangularController">
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
<body>
    <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<a href="#" id="login-form-link">GİRİŞ</a>
							</div>
							<div class="col-xs-3">
								<a href="#" class="" id="register-form-link">KAYIT OL</a>
							</div>
                            <div class="col-xs-3">
								<a href="listele.php" class="" id="register-form-link">LİSTELE</a>
							</div>
                           <div class="col-xs-3">
								<a href="delete.php" id="login-form-link">SİL</a>
							</div>
                            
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username1" id="username1" ng-model="username1" tabindex="1" class="form-control" placeholder="Kullanıcı Adı" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password1" id="password1" ng-model="password1" tabindex="2" class="form-control" placeholder="Şifre">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input  tabindex="4" class="form-control btn btn-login" value="GİRİŞ YAP" ng-click="login();">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Kullanıcı Adı" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Şifre">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Şifre Tekrarı">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" onclick="register();" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="KAYIT OL">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
      </body>

</html>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
    
    $(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
        
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
        
	});

});

     
        function register(){
    var email = $('#email').val();
    var username = $('#username').val();
    var confirmpassword =$('#confirm-password').val();
 
       
            
     $.post("http://localhost/muh_proje/service/register.php",
    {
        password: confirmpassword,
        email: email,
        username: username
    },  
            
          
    function(data, status){
        alert('BAŞARIYLA KAYIT OLDUNUZ');
         
          
    });
              
        }
     
    
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script>
        
    
       var myangularapp = angular.module("myangularapp", []);
myangularapp.controller("myangularController", function($scope,$http) {
       
        
    $scope.login = function (){
    
    
        $scope.username1;
        $scope.password1;
        
    
        
        $http.post('http://localhost/muh_proje/service/login.php', { username: $scope.username1,
       password: $scope.password1,
             }).then(function(response) {
             
     
        alert(response.data[0].status);
           
            
    }, function errorCallback(response) {
            alert('BOŞ BIRAKMA');
    // bir hata oluşursa eşzamansız olarak çağırılır
    // veya sunucu, yanıtı bir hata durumu ile döndürür.
  });
        
    }
    
});
    
    
    
    </script>
    
    

    
   




  
    
    
    
   


    
    
  
  