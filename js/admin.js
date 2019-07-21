var app = angular.module('adminApp', []);

app.controller('adminCtrl', function ($scope, $http) {
    $scope.company = "";
    $scope.username = "";
    $scope.c = "";
    $scope.email = ""
    var config = {
        method: 'POST',
        url: '../dbConnection/user_detail_get.php'
    }
    var request = $http(config);
    request.then(function(response) {
        console.log(response.data);
        $scope.company = response.data[0];
        $scope.username = response.data[1];
        $scope.c = response.data[0][0];
        $scope.email = response.data[2];

    }, function(response) {
        alert("Failure");
    });

});