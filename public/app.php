<!doctype html>
<html lang="en" ng-app="fantasyApp" ng-controller="MainController">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZL</title>
    <link rel="stylesheet" href="./ezl/css/foundation.css">
    <link rel="stylesheet" href="./ezl/css/fantasy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script src="ezl/js/jquery-3.2.0.js"></script>
    <script src="./ezl/js/vendor/angular.js"></script>
    <script src="./ezl/js/vendor/angular-route.js"></script>
    <script src="./ezl/js/vendor/foundation.js"></script>
	
    <script src="./ezl/js/John/app.js"></script>
    
    <script src="./ezl/js/John/services.js"></script>
    <script src="./ezl/js/John/controllers.js"></script>
    <script src="./ezl/js/John/config.js"></script>
    <script src="./ezl/js/John/directives.js"></script>

</head>

<body>
    <fantasy-nav-bar></fantasy-nav-bar>
    <div>
        <ng-view></ng-view>
    </div>
    <fantasy-footer></fantasy-footer>
</body>
</html>