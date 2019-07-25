

app.controller('profileCtrl', function($scope, $http) {
    var id = 0;
    var configure = {
        method : 'GET',
        url : '../dbConnection/profile_get.php',
    };    

    var request = $http(configure);
    request.then(function(response){
            console.log(response);
            $scope.profileUsername = response.data[0][0];
            $scope.profileEmail = response.data[0][1];
            $scope.profileCompany = response.data[0][2];
            $scope.profilePhone = response.data[0][3];
            id = response.data[0][4];
            
        },function(error){
             $scope.errorMsg = error;
          });
    
    
//    var configure1 = {
//        method : 'GET',
//        url : '../dbConnection/profile_get_pic.php',
//    };    
//
//    var request1 = $http(configure1);
//    request1.then(function(response){
//            console.log(response);
//            $scope.profPic = response.data;
//            
//        },function(error){
//             alert(error);
//          });
//    
    
      Webcam.set({
        width: 250,
        height: 300,
        image_format: 'jpeg',
        jpeg_quality: 90
        });
    
      
    Webcam.attach( '#my_camera' );
    var imageL = "" ;
    $scope.takeSnapshot = function() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            imageL = data_uri;
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
    
    $scope.changeProfBtn = function(){
         document.getElementById('results').innerHTML = 'Your captured image will appear here...';
    }
    
    $scope.profChange = function(){
        if(imageL != ""){
            document.getElementById('results').innerHTML = 'Your captured image will appear here...';
            $('.modal').modal('hide');
            var configure1 = {
                method : 'POST',
                url : '../dbConnection/profile_update_pic.php',
                data : {
                    'pic' : imageL
                }
            };    

            var request1 = $http(configure1);
            request1.then(function(response){
                alert("Profile Picture Updated Successfully");
                window.location.href = "../profile.php";
            },function(error){
                alert(error);
            });
        
        }
    }
    
    
    
    $scope.profileUpdate = function(){
        if($scope.profileUsername == "" || $scope.profileEmail == "" || $scope.profileCompany == ""){
            $scope.profileLog = "Enter the following details";
        }else{
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
        }
    var request = $http(configure);
    request.then(function(response){
            alert ("Profile Updated Successfully.");
            window.location.href = "../profile.php";
        },function(error){
             $scope.errorMsg = error;
          });
    }
    
    $scope.profReset = function(){
        var r=confirm("Are you sure you want to reset profile picture?");
        if (r==true){
                var configure1 = {
                    method : 'GET',
                    url : '../dbConnection/profile_pic_reset.php',
            };    
            var request1 = $http(configure1);
            request1.then(function(response){
                window.location.href = "../profile.php"
            },function(error){
                console.log(error);
          });
    
        }else{
            alert("You pressed Cancel!");
        }   
    }
});





