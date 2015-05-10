angular.module('appRoutes', []).config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'views/home.html',
                controller: 'MainController'
            })
            .when('/users', {
                templateUrl: 'views/users/admin_index.html',
                controller: 'UserIndexController'
            })
            .when('/users/add', {
                templateUrl: 'views/users/admin_add.html',
                controller: 'UserAddController'
            })
            .when('/users/edit/:user_id', {
                templateUrl: 'views/users/admin_add.html',
                controller: 'UserEditController'
            });
            $locationProvider.html5Mode(true);
    }]);