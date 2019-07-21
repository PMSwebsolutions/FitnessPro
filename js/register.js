var app = angular.module('registerApp', []);
app.controller('regCtrl', function($scope, $http) {
    $scope.regComp = "";
    $scope.regEmail = "";
    $scope.regPhone = "";
    $scope.regUsername = "";
    $scope.regPass = "";
    $scope.regCPass = "";
    $scope.errorMsg = "";
    $scope.regSubmit = function(){
        var redC = {
            "border" : "1px solid red"
        };
        var greyC = {
            "border" : "1px solid grey"
        };
        var error = "Fill the following Columns.";
        var error1 = "";
        
        if($scope.regComp == ""){
            $scope.regCompStyle = redC;
            $scope.errorMsg = error;
        }else{
            $scope.regCompStyle = greyC;
            $scope.errorMsg = error;
        }
        
        if($scope.regEmail == ""){
            $scope.regEmailStyle = redC;
            $scope.errorMsg = error;
        }else{
            $scope.regEmailStyle = greyC;
            $scope.errorMsg = error;
        }
        
        
        if($scope.regPhone == ""){
            $scope.regPhoneStyle = redC;
            $scope.errorMsg = error;
        }else{
            $scope.regPhoneStyle = greyC;
            $scope.errorMsg = error;
        }
        
        
        if($scope.regUsername == ""){
            $scope.regUsernameStyle = redC;
            $scope.errorMsg = error;
        }else{
            $scope.regUsernameStyle = greyC;
        }
        
        
        if($scope.regPass == ""){
            $scope.regPassStyle = redC;
            $scope.errorMsg = error;
        }else{
            $scope.regPassStyle = greyC;
        }
        
        
        if($scope.regCPass == ""){
            $scope.regCPassStyle = redC;
            $scope.errorMsg = error;
        }else{
            $scope.regCPassStyle = greyC;
        }
        
        if($scope.regComp == "" || $scope.regEmail == "" || $scope.regPhone == "" || $scope.regUsername == "" || $scope.regPass == "" || $scope.regCPass == "" ){
            $scope.errorMsg = error;
        }else{
            if($scope.regPass != $scope.regCPass){
                $scope.errorMsg = "The Passwords are not matching.";
                $scope.regCPassStyle = redC;
            }else{
                $scope.errorMsg = "";
                var configure = {
                    method : 'POST',
                    url : '../dbConnection/user_detail_insert.php',
                    data : {
                        'company' : $scope.regComp,
                        'email' : $scope.regEmail,
                        'phone' : $scope.regPhone,
                        'username' : $scope.regUsername,
                        'password' : $scope.regPass 
                    }
                };    
          var request = $http(configure);
          request.then(function(response){
              $scope.errorMsg = response.data;
              if(response.data == "success"){
                window.location.href = "../login.html";
              }
          },function(error){
              $scope.errorMsg = error;
          });
            }
        }
    }
});




