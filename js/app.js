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

		// route for the contact page
		.when('/projects', {
			templateUrl : 'pages/projects.html',
			controller  : 'projectsController'
		});

});




// create the controller and inject Angular's $scope
app.controller('homeController', function($scope) {
	$scope.message = 'This is a message from the controller, hello GitHub. ';
});

app.controller('aboutController', function($scope) {
	$scope.message = 'Look! I am an about page.';
});

app.controller('contactController', function($scope) {
	$scope.message = 'Contact us! JK. This is just a demo.';
});

app.controller('projectsController', function($scope) {
	$scope.message = 'Look! I am the project page.';
});