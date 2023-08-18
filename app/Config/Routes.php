<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use App\Controllers\BE\{
    DashboardController,
    Post,
    Author
};
use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
//$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('', static function (RouteCollection $routes) {
    $routes->get('/', static function () {return redirect('home.index');});
    $routes->group('', ['filter' => 'isloggedin:auth'], static function (RouteCollection $routes) {
        $routes->post('logout', 'AuthenticateController::logout', ['as' => 'auth.logout']);
        $routes->get('home', 'HomeController::index', ['as' => 'home.index']);
    });
    $routes->group('auth', ['filter' => 'isloggedin:guest'], static function (RouteCollection $routes) {
        $routes->get('login', 'AuthenticateController::login', ['as' => 'login.index']);
        $routes->get('register', 'AuthenticateController::register', ['as' => 'register.index']);
        $routes->post('login', 'AuthenticateController::loginHandler', ['as' => 'auth.login']);
        $routes->post('register', 'AuthenticateController::registerHandler', ['as' => 'auth.register']);
        //reset-password
        $routes->get('password/reset/', 'AuthenticateController::resetForm', ['as' => 'auth.reset-form']);
        $routes->post('reset-password', 'AuthenticateController::sendResetPassword', ['as' => 'auth.send-reset-password']);
        $routes->get('password/change/(:any)', 'AuthenticateController::changePasswordView/$1', ['as' => 'auth.get-change-password-view']);
        $routes->post('password/change/(:any)', 'AuthenticateController::changePassword/$1', ['as' => 'auth.post-change-password']);

    });
    $routes->group('posts', ['filter' => 'isloggedin:auth'], static function (RouteCollection $routes) {
        $routes->get('posts', 'PostController::index', ['as' => 'posts.index']);
        $routes->get('(:num)', 'PostController::show/$1', ['as' => 'posts.show']);
    });
});

/*
 **888888888888888888888 */
$routes->group('author', [], static function (RouteCollection $routes) {
    $routes->get('dashboard', [DashboardController::class, 'index']);

    $routes->group('posts', static function (RouteCollection $routes) {
        $routes->get('/', [Post::class, 'index'], ['as'=> 'author.post.index']);
        $routes->get('create', [Post::class, 'create'], ['as'=> 'author.post.create']);
        $routes->post('store', [Post::class, 'store'], ['as'=> 'author.post.store']);
    });
    $routes->group('authors', static function (RouteCollection $routes) {
        $routes->get('/', [Author::class, 'index'], ['as'=> 'author.author.index']);
    });
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
