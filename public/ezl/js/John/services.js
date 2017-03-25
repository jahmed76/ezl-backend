//Temp fix - Intellisense
var fantasy_app = angular.module("fantasyApp", ["ngRoute"]);
//Comment this or it will fail

fantasy_app.service('Verify', function ($http, $route, $rootScope) {
    this.User = function (stored) {
        $http.get('auth/verify', stored).then(function (res) {
            if (res.data)
                return res.data;
            else {
                return alert("No Response!");
                //this.Kick();
            }
        }, function () {
            return alert("Verify.User failed!");
            //this.Kick();
        });
    }

    this.Kick = function () {
        $http.get('auth/logout').then(function () {
            $route.reload();
        });
    }

    this.LoggedIn = function () {

        //return success = function(res)

        $http.get('auth/echo').then(function (res) {
            alert("Verify.LoggedIn succeeded!");
            alert(JSON.stringify(res.data));

            if (res.data.data = "null")
                query = false;
            else
                query = true;

        }, function () {
            return alert("Verify.LoggedIn failed!");
        });

        //return Promise.resolve(query);
        
        //.done(function (res) {
        //    alert(res);
        //}));

        //    .finally(function (res) {
        //    alert(res);
        //});
        //return query;
    }

    this.Check = function () {
        $http.get('auth/user').then(function (res) {
            return alert(res.data);
        });
    }
});
//.service('Credentials', function ($scope, $http, $location) {
//    this.
//})