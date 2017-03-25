//Temp fix - Intellisense
//var fantasy_app = angular.module("fantasyApp", ["ngRoute"]);
//Comment this or it will fail

fantasy_app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider
      .when('/', {
          templateUrl: './ezl/fantasy/fantasy_home.html',
          controller: 'fantasy_homeController'
      })

      .when('/fantasy_how_to_play', {
          templateUrl: './ezl/fantasy/fantasy_how_to_play.html',
          controller: 'fantasy_how_to_playController'
      })

      .when('/fantasy_room', {
          templateUrl: './ezl/fantasy/fantasy_room.html',
          controller: 'fantasy_roomController'
      })

      .when('/fantasy_join', {
          templateUrl: './ezl/fantasy/fantasy_join.html',
          controller: 'fantasy_joinController'
      })

      .when('/userlogin', {
          templateUrl: './ezl/pages/login.html',
          controller: 'loginController'
      })

      .when('/registration', {
          templateUrl: './ezl/pages/register.html',
          controller: 'registerController'
      });

    //.otherwise({
    //    redirectTo: '/'
    //});

    // .when('/fantasy_create', {
    //    templateUrl : './fantasy/fantasy_create.html',
    //    controller : 'fantasy_createController'
    // });
}]);