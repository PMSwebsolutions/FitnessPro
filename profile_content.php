<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
    <script src="js/profile.js"></script>
</head>

<body >
      <section class="forms-section" ng-controller="profileCtrl">
            <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">My Profile</h4>
                <p style="color:red;">{{profileLog}}</p>
                    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputUsername">Username</label>
                                <input type="text" class="form-control" id="inputUsername" placeholder="Username" ng-model="profileUsername">
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
     </section>
</body>

</html>