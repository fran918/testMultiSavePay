'use strict';

angular.module('Client')
	.controller('InicioCtrl', function ($scope, $rootScope, $location, $timeout, $http) {
		$rootScope.base_url = 'http://localhost:8000/';
		$scope.data;
		$scope.total = 0;

		$http.get($rootScope.base_url + 'data').
			success(function (data, status, headers, config) {
				if(data.status === 'true'){
				$scope.data = data;
				$scope.sumTotal(data.items.item);
			}else{
				console.log("false");
			}
			}).
			error(function (data, status, headers, config) {
				console.error(data, status, headers, config );
			});
		$scope.sumTotal = function(data){
			let sum = 0;
			data.map((item)=>{
				sum += item['quantity'] * item['unit-price']
			});
			$scope.total += sum;
		}
	})