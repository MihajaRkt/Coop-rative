<?php

use app\controllers\ApiExampleController;
use app\controllers\VehiculeController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;
use app\models\ProductModel;
use app\controllers\WelcomeController;
/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {


	// $router->get('/prod/@id', function($id) use ($app) {
	// 	$products = new ProductModel();
	// 	$produit = $products->getProduct($id);
	// 	$app->render('produit', [ 'produit' => $produit ]);
	// });
	
	$router->group('/api', function() use ($router) {
		$router->get('/users', [ ApiExampleController::class, 'getUsers' ]);
		$router->get('/users/@id:[0-9]', [ ApiExampleController::class, 'getUser' ]);
		$router->post('/users/@id:[0-9]', [ ApiExampleController::class, 'updateUser' ]);
	});
	
	// $Welcome_Controller = new WelcomeController();
	// $router->get('/', [$Welcome_Controller, 'home']);
	// $router->get('/homedb', [$Welcome_Controller, 'homedb']);
	// $router->get('/testdb', [$Welcome_Controller, 'hometest']);

	// $router->get('/prod/@idp', [$Welcome_Controller, 'produit']);
	// $router->get('/delete/@id', [$Welcome_Controller, 'delete']);

	// $router->get('/insert', function() use ($app) {
	// 	$app->render('insertion');
	// });

	// $router->post('/traitementInsert', [$Welcome_Controller, '']);
	$vehiculeController = new VehiculeController();
	$router->get('/', [$vehiculeController, 'getVehicules']);

	
}, [ SecurityHeadersMiddleware::class ]);