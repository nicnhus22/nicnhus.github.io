// create the module and name it scotchApp
var app = angular.module('app', ['ngRoute']);

// configure our routes
app.config(function($routeProvider) {
	$routeProvider

		// route for the home page
		.when('/', {
			templateUrl : 'pages/home.html',
			controller  : 'HomeController'
		})

		// route for the contact page
		.when('/contact', {
			templateUrl : 'pages/contact.html',
			controller  : 'ContactController'
		})

		// route for the contact page
		.when('/projects', {
			templateUrl : 'pages/projects.html',
			controller  : 'ProjectsController'
		});

});


app.controller('CommonController', ['$scope',  function($scope){

	$scope.menu_items = [
		{"name":"home","value":"Home"},
		{"name":"projects","value":"Projects"},
		{"name":"contact","value":"Contact"}
	];

	$scope.updateSelectedItem = function(item){
		this._helperRemoveAllMenuItemClass();
		switch(item.name){
			case 'home':
				$scope.item_home.addClass('active');
			break;
			case 'projects':
				$scope.item_projects.addClass('active');
			break;
			case 'contact':
				$scope.item_contact.addClass('active');
			break;
		}
	};

	$scope._helperRemoveAllMenuItemClass = function(){
		$scope.item_home.removeClass('active');
		$scope.item_projects.removeClass('active');
		$scope.item_contact.removeClass('active');
	};
}]);

// create the controller and inject Angular's $scope
app.controller('HomeController', function($scope) {
	$scope.message = 'This is a message from the controller, hello GitHub. ';
});

app.controller('ContactController', function($scope) {
	$scope.message = 'Contact us! JK. This is just a demo.';
});

app.controller('ProjectsController', function($scope) {
	$scope.message = 'Look! I am the project page.';
});