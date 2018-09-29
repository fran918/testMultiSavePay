'use strict';

angular.module('Client',['ngResource','ngRoute'])
	.config(function($routeProvider, $locationProvider){
		$routeProvider
		.when('/',{
			templateUrl: 'views/index.html',
			controller: 'InicioCtrl'
		})
		.otherwise({
			redirectTo: '/'
		});
		$locationProvider.html5Mode(true);
	});