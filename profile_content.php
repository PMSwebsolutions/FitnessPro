
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CodeBrothers Fitness Pro 1.0</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->
<!--
    <script src="js/jquery.js"></script>
    <script src="js/checker.js"></script>
-->
    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
    <script src="js/jquery.js"></script>
    <script src="js/angular.js"></script>
    <script src="js/webcam.js"></script>
    <script src="js/profile.js"></script>
</head>

<body >
      <section class="forms-section" ng-controller="profileCtrl">
            <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">My Profile</h4>
                <p style="color:red;">{{profileLog}}</p>
                    <form method="post">
                         <div class="form-group" style="margin:auto;width:20%;">
                                <img src="dbConnection/profile_get_pic.php" alt="na" style="height:250px;width:250px;border-radius:50%;">
                            </div>
                        <br><br>
                        <div class="form-group" style="margin:auto;width:40%;padding-left:50px;">
                         <button class="btn" data-toggle="modal" data-target=".bd-example-modal-lg" ng-click="changeProfBtn()">Change Profile Picture</button>&nbsp;&nbsp;    
                        <button class="btn" ng-click="profReset()">Reset Profile Picture</button>
                        </div>
                        <br><br>
                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="inputUsername">Username</label>
                                <input type="text" class="form-control" id="inputUsername" placeholder="Username" ng-model="profileUsername" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="password1">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="password1" placeholder="Email" ng-model="profileEmail">
                                   
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Company</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="company" ng-model="profileCompany">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="inputZip">Phone</label>
                                <input type="number" class="form-control" id="inputZip" placeholder="Phone Number" ng-model="profilePhone">
                            </div>
                        </div>
                        
                        <button class="btn btn-primary" ng-click="profileUpdate()">Update Profile</button>
                    </form>
                </div>
           <!-- Large popup content -->
                
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Change Profile Pic</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <form method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="my_camera"></div>
                                        <br/>
                                            <input class="btn" type=button value="Take Snapshot" ng-click="takeSnapshot()">
                                            <input type="hidden" name="image" class="image-tag" >
                                        </div>
                                    <div class="col-md-6">
                                            <div id="results">Your captured image will appear here...</div>
                                    </div>
                                <div class="col-md-12 text-center">
                            <br/>
                                <button class="btn" ng-click="profChange()">Change Profile Picture</button>
                                    </div>
                                    </div>
                                </form> 
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <!--// Large popup content -->
     </section>
</body>

</html>