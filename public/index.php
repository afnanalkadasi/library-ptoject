<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\HomeController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

Router::get('/', [HomeController::class, 'index']);
Router::get('/sal', [HomeController::class, 'sal']);
Router::get('/category', [HomeController::class, 'category']);
Router::get('/details', [HomeController::class, 'details']);
Router::get('/checkout', [HomeController::class, 'checkout']);
Router::get('/login', [HomeController::class, 'login']);
Router::get('/sign_up', [HomeController::class, 'sign_up']);
Router::get('/dashboards-ecommerce', [HomeController::class, 'dashboard']);

Router::get('/app-user-list', [UsersController::class, 'users']);
Router::get('/new_user',[UsersController::class,'newUser']);
Router::get('/edit_user',[UsersController::class,'editUser']);
Router::get('/remove_user',[UsersController::class,'delete']);
Router::post('/users',[UsersController::class,'show']);
Router::post('/save_user',[UsersController::class,'saveUser']);
Router::get('/save_author',[AuthorsController::class,'createAuthor']);
$system->start();

