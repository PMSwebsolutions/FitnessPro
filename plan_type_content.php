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
    <script src="js/plan.js"></script>
</head>

<body >
      <section class="forms-section" ng-controller="planCtrl">
            
            <div class="outer-w3-agile mt-3" ng-app="planApp" ng-controller="planTypeCtrl">
                    <h4 class="tittle-w3-agileits mb-4">Plans{{planIndex}}</h4>
                    <div class="row validform">
                        <div class="col-md-4 order-md-2 mb-4 validform1">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Existing Plan Types</span>
                                <span class="badge badge-secondary badge-pill">{{planList.length}}</span>
                            </h4>
<!--                            Cart Items-->
                            <ul class="list-group mb-3" style="max-height: 400px; overflow-y: scroll;">
                                <div ng-repeat="p in planList" id="listDiv">
                                <li class="list-group-item d-flex justify-content-between" ng-mouseover="hoverIn(p)" ng-mouseleave="hoverOut(p)" style="cursor: pointer" ng-class="{'lh-condensed' : p.isDarkActive, 'bg-light' : p.isLightActive }" ng-click="planEditForm($index)">
                                    <div data-toggle="modal" data-target="#exampleModal">
                                        <h6 class="my-0" ng-class="{'text-muted' : p.isDarkActive, 'text-success' : p.isLightActive}"   data-toggle="modal" data-target="#exampleModal">{{p[1]}}</h6>
                                    </div>
                                    <span ng-class="{'text-muted' : p.isDarkActive, 'text-danger' : p.isLightActive}"><a  ng-click="delete($index)"  style="cursor: pointer;"><i class="fas fa-trash"></i></a></span>
                                </li>
                                </div>

                            </ul> 
<!--                            // Cart Items-->
                            
                             <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Edit Form</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                             <form  method="post" class="needs-validation" novalidate="">
                                <p style="color: red;">{{planErrorE}}</p>
<!--                                Plan Type -->
                                <div class="mb-3">
                                    <label for="username1">Plan Type</label>
                                    <div class="input-group">
                                        <input type="text" ng-model="nameE" ng-style="nameStyleE" class="form-control" id="username1" placeholder="Enter the plan name" >                            
                                    </div>
                                </div>
                                         
                                <hr class="mb-4">
                                               
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" ng-click="planClickE()" >Update Plan Type</button>                                                 
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Modal -->

                        </div>
                        <div class="col-md-8 order-md-1 validform2">

                            <form  method="post" class="needs-validation" novalidate="">
                                <p style="color: red;">{{planError}}</p>
<!--                                Plan Type -->
                                <div class="mb-3">
                                    <label for="planName">Plan Type</label>
                                    <div class="input-group">
                                        <input type="text" ng-model="name" ng-style="nameStyle" class="form-control" id="planName" placeholder="Enter the plan Type" >                            
                                    </div>
                                </div>
<!--                                //Plan Type -->
                                

                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" ng-click="planClick()" >Add Plan Type</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
</body>

</html>