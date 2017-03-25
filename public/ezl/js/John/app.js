//Temp fix - Intellisense
//var fantasy_app = angular.module("fantasyApp", ["ngRoute"]);
//Comment this or it will fail

var fantasy_app = angular.module("fantasyApp", ["ngRoute"]);

// Delayed Foundation Reinitialization
fantasy_app.run(function ($rootScope, $timeout) {
    $rootScope.$on('$viewContentLoaded', function () {
        $timeout(function () {
            $(document).foundation();
        }, 300)
    });
});