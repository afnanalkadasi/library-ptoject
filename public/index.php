<?php
require_once __DIR__ . '/../vendor/autoload.php';
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\HomeController;
use coding\app\controllers\CategoryController;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublishersController;
use coding\app\controllers\BooksController;
use coding\app\controllers\CityController;
use coding\app\controllers\OfferController;

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
////////////////////////////user///////////
Router::get('/new_user',[UsersController::class,'newUser']);
Router::get('/edit_user',[UsersController::class,'editUser']);
Router::get('/app-user-list', [UsersController::class, 'users']);
Router::get('/remove_user',[UsersController::class,'delete']);
Router::post('/users',[UsersController::class,'show']);
Router::post('/save_user',[UsersController::class,'saveUser']);
Router::get('/save_author',[AuthorsController::class,'createAuthor']);
////////////////////////////category///////////
Router::get('/add_category',[CategoryController::class,'add_category']);
Router::get('/edit_category',[CategoryController::class,'editcategory']);
Router::get('/app-category-list',[CategoryController::class,'category']);
////////////////////////////Authors///////////
Router::get('/add_author',[AuthorsController::class,'add_author']);
Router::get('/edit_author',[AuthorsController::class,'editauthor']);
Router::get('/app-author-list',[AuthorsController::class,'author']);
////////////////////////////Publishers///////////
Router::get('/add_publisher',[PublishersController::class,'add_publisher']);
Router::get('/edit_publisher',[PublishersController::class,'editpublisher']);
Router::get('/app-publisher-list',[PublishersController::class,'publisher']);
////////////////////////////book///////////
Router::get('/add_book',[BooksController::class,'add_book']);
Router::get('/edit_book',[BooksController::class,'editbook']);
Router::get('/app-book-list',[BooksController::class,'book']);
////////////////////////////city///////////
Router::get('/add_city',[CityController::class,'add_city']);
Router::get('/edit_city',[CityController::class,'editcity']);
Router::get('/app-city-list',[CityController::class,'city']);
////////////////////////////Offers///////////
Router::get('/add_offer',[OfferController::class,'add_offer']);
Router::get('/edit_offer',[OfferController::class,'editoffer']);
Router::get('/app-offer-list',[OfferController::class,'offer']);
$system->start();

