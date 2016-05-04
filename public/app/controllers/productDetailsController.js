app.controller('productDetailsController', function($scope, $http, $location, API_URL) {
    console.log('this');
    var id = $location.absUrl().split("/");    //path will be /person/show/321/, and array looks like: ["","person","show","321",""]
    console.log(id[4]);
    $http.get("/api/product/details/"+id[4]).success(function(response) {
      console.log(response);
      $scope.products = response;
    });
});
