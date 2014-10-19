// create the module and name it scotchApp
var app = angular.module('app', ['ngRoute']);

// configure our routes
app.config(function($routeProvider) {
	$routeProvider

		// route for the home page
		.when('/', {
			templateUrl : 'pages/home.html',
			controller  : 'homeController'
		})

		// route for the about page
		.when('/about', {
			templateUrl : 'pages/about.html',
			controller  : 'aboutController'
		})

		// route for the contact page
		.when('/contact', {
			templateUrl : 'pages/contact.html',
			controller  : 'contactController'
		});
});




// create the controller and inject Angular's $scope
app.controller('homeController', function($scope) {
	$scope.videos = [
		{"img": "images/thumb_brainwash.jpg",
		 "name":"BrainWash",
		 "url":"http://www.biketrials.tv/fr/video/1245",
		 "size":"12"},
		{"img": "images/thumb_fantin.jpg",
		 "name":"Sochi",
		 "url":"http://www.biketrials.tv/fr/video/1245",
		 "size":"6"},
		{"img": "images/thumb_tourmente.jpg",
		 "name":"Sochi",
		 "url":"http://www.biketrials.tv/fr/video/1245"},
		 "size":"6"},
		{"img": "images/thumb_winter_game.jpg",
		 "name":"Sochi",
		 "url":"http://www.biketrials.tv/fr/video/1245",
		 "size":"12"}
	]

});




app.controller('aboutController', function($scope) {
	$scope.message = 'Look! I am an about page.';
});




app.controller('contactController', function($scope) {
	$scope.message = 'Contact us! JK. This is just a demo.';
});