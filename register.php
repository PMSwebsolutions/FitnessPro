<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Register :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script src="js/angular.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/webcam.js"></script>
    <script type="text/javascript" src="js/register.js"></script>

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->
    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
    
</head>

<body>
    <div ng-app="registerApp" class="bg-page py-5" ng-controller="regCtrl">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Register</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form method="post">
                    <p style="color: red;">{{errorMsg}}</p><br>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input ng-model="regComp" ng-style="regCompStyle" type="text" name="regComp" class="form-control" placeholder="Enter Company Name" >
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input ng-model="regEmail" ng-style="regEmailStyle" name="regEmail" type="email" class="form-control" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input ng-model="regPhone" ng-style="regPhoneStyle" name="regPhone" type="number" class="form-control" placeholder="Enter Phone Number"  maxlength="12" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input ng-model="regUsername" ng-style="regUsernameStyle" type="text" class="form-control" placeholder="Enter username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input ng-model="regPass" ng-style="regPassStyle" type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input ng-model="regCPass" ng-style="regCPassStyle"  type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <img src="{{profImgFin}}" style="height:300px; width:250px;" alt="na"><br>
                    </div>
                    <div class="form-group">
                        <button class="btn" data-toggle="modal" data-target=".bd-example-modal-lg" ng-click="changeProfBtn()">Change Profile Pic</button>&nbsp;&nbsp;
                        
                        <button class="btn" ng-click="profReset()">Reset Profile</button>&nbsp;&nbsp;
                    </div>
                    <button type="submit" ng-click="regSubmit()" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4" value="submit">Submit</button>

                </form>

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

                
            </div>

        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>
