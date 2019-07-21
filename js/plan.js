
$('#listDiv').fadeIn(3000);

var planApp = angular.module('planApp', []);
app.controller('planCtrl', function($scope, $http) {
  
  getPlans();
    
    // Main FORM
  $scope.name = "";
  $scope.price = null;
  $scope.years = null;   
  $scope.months = "0";
  $scope.planError = "";
  $scope.validError = "";
  $scope.isDarkActive = true;
  $scope.isLightActive = false;
  $scope.taxPercent = null;
  $scope.taxType = "Inclusive";
    
    
    
    
  $scope.finalFun = function(){
      if($scope.taxType == "None"){
          $scope.finalPrice = $scope.price;
          $scope.taxPercent = null;
      }else if($scope.taxType == "Inclusive"){
          $scope.finalPrice = $scope.price;
      }else{
          $scope.finalPrice = $scope.price + ($scope.price * $scope.taxPercent)/100;
      }
  }
        
  $scope.planClick = function(){
      var clear1 = 0;
      var clear2 = 0;
      redC = {
          "border" : "1px solid red"
      };
      greyC = {
          "border" : "1px solid grey"
      };
      
      if($scope.name == ""){
          $scope.nameStyle = redC;
      }else{
          $scope.nameStyle = greyC;
      }
      
      if($scope.price == null){
          $scope.priceStyle = redC;
      }else{
          $scope.priceStyle = greyC;
      }
      
      if($scope.name == "" || $scope.price == null){
          $scope.planError = "Please fill the necessay data";
      }else{
          $scope.planError = "";
          clear1 = 1;
      }
      
      if($scope.years == null && $scope.months == 0){
          $scope.validError = "Please enter valid duration";
      }else{
          $scope.validError = "";
          clear2 = 1;
      }
      
      if(clear1 == 1 && clear2 == 1){
          if($scope.years == null){
              $scope.years = 0;
          }
          if($scope.months == null){
              $scope.months = 0;
          }
          
          if($scope.taxPercent == null){
              $scope.taxPercent = 0;
          }
          
           var configure = {
              method : 'POST',
              url : '../dbConnection/plan_insert.php',
              data : {
                  'name' : $scope.name,
                  'price' : $scope.price,
                  'years' : $scope.years,
                  'months' : $scope.months,
                  'tax' : $scope.taxPercent,
                  'type' : $scope.taxType,
                  'finalPrice' : $scope.finalPrice
              }
          };    
          var request = $http(configure);
          request.then(function(response){
              if(response.data == "success"){
                  $scope.name = "";
                  $scope.price = null;
                  $scope.years = null;
                  $scope.months = null;
                  getPlans();
              }
                  
          },function(error){
              alert(error);
          });
      }
      
      
  };
    
  $scope.delete = function(msg){
        //alert(typeof($scope.planList[msg][0])); //ID
        var configure = {
            method : 'POST',
            url : '../dbConnection/plan_delete.php',
            data : {
                'id' : $scope.planList[msg][0]
            }
        };    
        var request = $http(configure);
        request.then(function(response){
            getPlans();
          },function(error){
            alert("error");
          });
    }
    
  function getPlans(){
      var configure = {
              method : 'GET',
              url : '../dbConnection/plan_get.php',
          };    
          var request = $http(configure);
          request.then(function(response){
              response.data.sort(function(a,b){
                                       return a[2] - b[2] 
                                       });
              $scope.planList = response.data;               
          },function(error){
              alert("error");
          });
  }
    
  $scope.hoverIn = function(p){
//        $scope.planIndex = index;
        p.isDarkActive = false;
        p.isLightActive = true;
    }
     
  $scope.hoverOut = function(p){
        $scope.planIndex = null;
        p.isDarkActive = true;
        p.isLightActive = false;
    };
  
    
    
  $scope.nameE = "";
  $scope.priceE = null;
  $scope.taxPercentE = null;
  $scope.taxTypeE = "Inclusive";
  $scope.monthsE = "0";
  $scope.yearsE = null;
  $scope.finalFunE = function(){
      if($scope.taxTypeE == "None"){
          $scope.finalPriceE = $scope.priceE;
          $scope.taxPercentE = null;
      }else if($scope.taxTypeE == "Inclusive"){
          $scope.finalPriceE = $scope.priceE;
      }else{
          $scope.finalPriceE = $scope.priceE + ($scope.priceE * $scope.taxPercentE)/100;
      }
  }
  
  
  
  
});





