
$('#listDiv').fadeIn(3000);

var planApp = angular.module('planApp', []);
app.controller('planTypeCtrl', function($scope, $http) {
  
  getPlansType();
    
    // Main FORM
  $scope.name = "";
  $scope.planError = "";
  $scope.isDarkActive = true;
  $scope.isLightActive = false;

    
    
    
    

        
  $scope.planClick = function(){
      var clear1 = 0;
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
      
      
      if($scope.name == ""){
          $scope.planError = "Please fill the necessay data";
      }else{
          $scope.planError = "";
          clear1 = 1;
      }
      
      if(clear1 == 1){  
           var configure = {
              method : 'POST',
              url : '../dbConnection/plan_type_insert.php',
              data : {
                  'name' : $scope.name,
              }
          };    
          var request = $http(configure);
          request.then(function(response){
              if(response.data == "success"){
                  $scope.name = "";
                  document.getElementById('planName').focus();
                  getPlansType();
                  $scope.planError = "";
              }else{
                  $scope.planError = "The plan type already exists.";
                  $scope.name = "";
                  document.getElementById('planName').focus();
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
            url : '../dbConnection/plan_type_delete.php',
            data : {
                'id' : $scope.planList[msg][0]
            }
        };    
        var request = $http(configure);
        request.then(function(response){
            getPlansType();
          },function(error){
            alert("error");
          });
    }
    
  function getPlansType(){
      var configure = {
              method : 'GET',
              url : '../dbConnection/plan_type_get.php',
          };    
          var request = $http(configure);
          request.then(function(response){
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
  $scope.idE = null;

  
  $scope.planClickE = function(){
      var clear1E = 0;
      redC = {
          "border" : "1px solid red"
      };
      greyC = {
          "border" : "1px solid grey"
      };
      
      if($scope.nameE == ""){
          $scope.nameStyleE = redC;
      }else{
          $scope.nameStyleE = greyC;
          clear1E = 1;
      }
      
      if(clear1E == 1){
           var configure = {
              method : 'POST',
              url : '../dbConnection/plan_type_update.php',
              data : {
                  'id' : $scope.idE,
                  'name' : $scope.nameE,
              }
          };    
          var request = $http(configure);
          request.then(function(response){
              if(response.data == "success"){                
                  $('.modal').modal('hide');
                  getPlansType();
              }else{
                  $scope.planErrorE = "Plan type already exists.";
              }
                  
          },function(error){
              alert(error.data);
          });
      }
      
      
  };
  
  $scope.planEditForm = function(msg){
      $scope.nameE = $scope.planList[msg][1];
      $scope.idE = $scope.planList[msg][0];
  }    
  
});





