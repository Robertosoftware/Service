var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
		.when("/Registro de clase", {
				templateUrl:"partials/clase.php",
				controller:"gameCtrl"
		})
		.when("/Actualizar datos", {
				templateUrl:"partials/actualizar.php",
				controller:"gameCtrl"
		})
		.otherwise({
				templateUrl:"partials/main.php",
				controller:"mainCtrl"
		});
});

