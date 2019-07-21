var app = angular.module('loginApp', []);
app.controller('loginController', function($scope, $http) {
  $scope.username = "";
  $scope.password = "";
  $scope.errorMsg = "";
  $scope.loginSubmit = function(){
      if($scope.username == "" && $scope.password == ""){
          $scope.errorMsg = "Please Enter an Username and a Password";
          $scope.usernameStyle = {
              "border" : "1px solid red" 
          }
          $scope.passwordStyle = {
              "border" : "1px solid red" 
          }
      }else if($scope.password == ""){
          $scope.errorMsg = "Please Enter a Password";
          $scope.passwordStyle = {
              "border" : "1px solid red" 
          }
          $scope.usernameStyle = {
              "border" : "1px solid grey" 
          }
      }else if($scope.username == ""){
          $scope.errorMsg = "Please Enter an Username";
          $scope.usernameStyle = {
              "border" : "1px solid red" 
          }
          $scope.passwordStyle = {
              "border" : "1px solid grey" 
          }
      }else{
          var configure = {
              method : 'POST',
              url : '../dbConnection/user_detail_login.php',
              data : {
                  'username' : $scope.username,
                  'password' : $scope.password
              }
          };    
          var request = $http(configure);
          request.then(function(response){
              $scope.errorMsg = response.data;
              if(response.data == "Logged in")
              window.location.href = "../admin.php";
          },function(error){
              $scope.errorMsg = error;
          });
      }
  }
});


var togglePassword = function(){
    var x = document.getElementById("logPassword");
    if(x.type === "password"){
        x.type = "text";
    }else{
        x.type = "password";
    }
}

