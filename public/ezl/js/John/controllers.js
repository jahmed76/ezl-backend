//Temp fix - Intellisense
//var fantasy_app = angular.module("fantasyApp", ["ngRoute"]);
//Comment this or it will fail

fantasy_app.controller('MainController', function ($scope, $http, $rootScope, Verify) {
    //$rootScope.User
    alert(Verify.LoggedIn());

    //$rootScope.$on('SetUserInfo', function (event, data) {
    //    $rootScope.UserInfo = {
    //        username: data.username,
    //        role: data.role,
    //        token: data.token
    //    };
    //});
})

.controller('fantasy_homeController', function ($scope) {
    $scope.message = 'fantasy_home controller is working';
    $scope.bShow = false;
})

.controller('fantasy_how_to_playController', function ($scope) {
    $scope.message = 'fantasy_how_to_play controller is working';
})

.controller('fantasy_roomController', function ($scope) { //
    //$scope.message = 'fantasy_room controller is working';
})

.controller('fantasy_roomController', function ($scope) { //
    //$scope.message = 'fantasy_room controller is working';



})

.controller('fantasy_joinController', function ($scope) {
    $scope.message = 'fantasy_join controller is working';
})

.controller('loginController', function ($scope, $http) {
    $scope.message = 'login controller is working';

    $scope.lFormData = {
        email: '',
        password: ''
    };
    $scope.loginFeedback = "";

    $scope.lFormSubmit = function () {
        $http.post('auth/login', $scope.lFormData,
            {
                headers: {
                    "Content-Type": "application/json"
                }
            }
        ).then(function (res) {
            //location.reload();
            alert(JSON.stringify(res.data));
            //$scope.registrationFeedback = "Registration Success!";
            //$interval(function (n) {
            //    if (n < 4)
            //        $scope.redirectCount += '.';
            //    else
            //        $location.path('/userlogin');
            //}, 300, 4);
        }, function () {
            alert('I failed!');
        });
    }

})

.controller('registerController', function ($scope, $http, $httpParamSerializer, $location, $interval) {
    $scope.message = 'Register controller is working';

    $scope.rFormData = {
        "name": "",
        "password": "",
        "email": "",
        "password_confirmation": ""
    };

    $scope.loginFeedback = "";

    $scope.redirectCount = "";

    $scope.rFormSubmit = function () {
        $http.post('auth/register', $scope.rFormData,
            {
                headers: {
                    "Content-Type": "application/json"
                }
            }
        ).then(function (res) {
            //alert(JSON.stringify(res.data));
            $scope.registrationFeedback = "Registration Success!";
            $interval(function (n) {
                if (n < 4)
                    $scope.redirectCount += '.';
                else
                    $location.path('/userlogin');
            }, 300, 4);
        }, function () {
            alert('I failed!');
        });
    }


})

.controller('fNavController', ['$scope', '$http', '$rootScope', 'Verify', function ($scope, $http, $rootScope, Verify) {
    $scope.bLoggedIn = false;
    $scope.UserCredentials = {
        username: "John"
    };

    $scope.CheckAuth = function () {
        $http.get('auth/echo').then(function (res) {
            alert(JSON.stringify(res.data));
        }, function () {
            alert("Failed ajax @ echo!");
        });
    }

    $scope.LogOut = function () {
        $http.get('auth/logout').then(function (res) {
            alert(JSON.stringify(res.data));
        }, function () {
            alert("Failed ajax @ echo!");
        });
    }


    //$scope.UserCredentials = $rootScope.UserCredentials;
    //if (Verify.LoggedIn()) {
    //    Verify.User($scope.UserCredentials)
    //}



}]);