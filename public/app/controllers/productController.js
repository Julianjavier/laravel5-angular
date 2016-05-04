app.controller('productController', function($scope, $http, API_URL) {
    console.log('this');

    $http.get(API_URL).success(function(response) {
      console.log(response);
      $scope.products = response;
    });

});
