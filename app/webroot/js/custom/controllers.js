var app = angular.module('konnectCity', []);

app.controller('commander_users', function($scope, $http) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    //~ $http.get("http://www.w3schools.com/angular/customers.php").success(function(response)
    //~ {
        //~ $scope.users = response;
    //~ });
});
