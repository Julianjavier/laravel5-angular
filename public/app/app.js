var app = angular.module('productListing', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
}).constant('API_URL', 'api/product');
