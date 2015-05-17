var app = angular.module('UserCtrl', []);

app.controller('UserIndexController', function($scope, $http, $location) {
    $scope.page_title = 'Manage Users';
    $scope.class="fa-toggle-on";

    $scope.delete_user = function(id, index) {
        $http.delete('/users/' + id)
            .success(function() {
                $scope.users.splice(index, 1);
            })
            .error(function() {
                console.log('Error : ' + data);
            });
    };

    $http.get('/users/index')
        .success(function(data) {
        $scope.users = data;
    })
    .error(function() {
        console.log('Error : ' + data);
    });
});
app.controller('UserAddController', function($scope, $http, $routeParams, $location) {
    $scope.page_title = 'Add User';

    $scope.save_user = function() {
        $http.post('/users/add', $scope.User)
                .success(function(data) {
            $location.url('/users');
        })
                .error(function(data) {
            console.log('Error : ' + data);
        })
    };
});
app.controller('UserEditController', function($scope, $http, $routeParams, $location, $window) {
    $scope.page_title = 'Edit User';

    $scope.save_user = function() {
        $http.post('/users/edit/' + $routeParams.user_id, $scope.User)
            .success(function(data) {
                $location.url('/users');
            })
            .error(function(data) {
            console.log('Error : ' + data);
        });
    };

    $http.get('')
        .success(function(data) {
        $scope.User = data;
    })
    .error(function() {
        console.log('Error : ' + data);
    });
});

app.controller('UserSignUpController', function($scope, $http, $routeParams, $location, $window) {
    $scope.page_title = 'Edit User';

    $scope.signup = function() {
        $http.post('/signup', $scope.User)
            .success(function(data) {
                if (data.status && data.status == true)
                {
                    $window.location.href = '/users';
                }
            })
        .error(function(data) {
            console.log('Error : ' + data);
        });
    };
});