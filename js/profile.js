

app.controller('profileCtrl', function($scope, $http) {
    var id = 0;
    var configure = {
        method : 'GET',
        url : '../dbConnection/profile_get.php',
    };    
    var request = $http(configure);
    request.then(function(response){
            $scope.profileUsername = response.data[0][0];
            $scope.profileEmail = response.data[0][1];
            $scope.profileCompany = response.data[0][2];
            $scope.profilePhone = response.data[0][3];
            id = response.data[0][4];
        },function(error){
             $scope.errorMsg = error;
          });
    $scope.profileUpdate = function(){
    var configure = {
        method : 'POST',
        url : '../dbConnection/profile_update.php',
        data : {
            'id' : id,
            'username' : $scope.profileUsername,
            'email' : $scope.profileEmail,
            'company' : $scope.profileCompany,
            'phone' : $scope.profilePhone         
        }
    };    
    var request = $http(configure);
    request.then(function(response){
            alert ("success");
        },function(error){
             $scope.errorMsg = error;
          });
    }
});





