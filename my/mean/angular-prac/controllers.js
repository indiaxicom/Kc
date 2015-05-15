var myApp = angular.module('myApp', []);

myApp.controller('DoubleController', ['$scope', function($scope) {
    $scope.double = function (value) {
        return value * 2;
    }
    $scope.btnDouble = function (value) {
        $scope.numi = value * 2
    }
}]);
