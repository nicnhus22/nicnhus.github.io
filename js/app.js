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
		.when('/mylife', {
			templateUrl : 'pages/mylife.html',
			controller  : 'myLifeController'
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
		{"img": "images/thumb_quickpro.png",
		 "name":"QuickPro",
		 "url":"http://www.biketrials.tv/fr/video/1245",
		 "size":"12"},
		{"img": "images/thumb_fantin.jpg",
		 "name":"Fantin",
		 "url":"http://www.biketrials.tv/fr/video/1245",
		 "size":"6"},
		{"img": "images/thumb_brainwash.jpg",
		 "name":"BrainWash",
		 "url":"http://www.biketrials.tv/fr/video/1245",
		 "size":"6"},
		{"img": "images/thumb_briancon.jpg",
		 "name":"BrianconHockey",
		 "url":"http://www.biketrials.tv/fr/video/1245",
		 "size":"12"}, 
		{"img": "images/thumb_tourmente.jpg",
		 "name":"Tourmente",
		 "url":"http://www.biketrials.tv/fr/video/1245",
		 "size":"6"},
		{"img": "images/thumb_wg.jpg",
		 "name":"WinterGame",
		 "url":"http://www.biketrials.tv/fr/video/1245",
		 "size":"6"}
	];

	$("img.lazy").lazyload();

});




app.controller('myLifeController', function($scope) {
});




app.controller('contactController', function($scope) {
	$scope.message = 'Contact us! JK. This is just a demo.';
});