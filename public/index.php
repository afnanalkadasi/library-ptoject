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
use coding\app\controllers\OrderController;
use coding\app\controllers\orderdetailsController;
use coding\app\controllers\payementController;
use coding\app\controllers\useraddressController;
use coding\app\controllers\user_pay_MController;
use coding\app\controllers\user_profController;
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
////////////////////////////orders///////////
Router::get('/add_order',[OrderController::class,'add_order']);
Router::get('/edit_order',[OrderController::class,'editorder']);
Router::get('/app-order-list',[OrderController::class,'order']);
////////////////////////////order_details///////////
Router::get('/add_orderdetails',[orderdetailsController::class,'add_orderdetails']);
Router::get('/edit_orderdetails',[orderdetailsController::class,'editorderdetails']);
Router::get('/app-orderdetails-list',[orderdetailsController::class,'orderdetails']);
////////////////////////////payements///////////
Router::get('/add_payements',[payementController::class,'add_payements']);
Router::get('/edit_payements',[payementController::class,'editpayements']);
Router::get('/app-payements-list',[payementController::class,'payements']);
////////////////////////////user_addresses///////////
Router::get('/add_useraddress',[useraddressController::class,'add_useraddress']);
Router::get('/edit_useraddress',[useraddressController::class,'edituseraddress']);
Router::get('/app-useraddress-list',[useraddressController::class,'useraddress']);
////////////////////////////user_addresses///////////
Router::get('/add_user_payment',[user_pay_MController::class,'add_user_payment']);
Router::get('/edit_user_payment',[user_pay_MController::class,'edituser_payment']);
Router::get('/app-user_payment-list',[user_pay_MController::class,'user_payment']);
////////////////////////////user_profiles///////////
Router::get('/add_user_profile',[user_profController::class,'add_user_profile']);
Router::get('/edit_user_profile',[user_profController::class,'edituser_profile']);
Router::get('/app-user_profile-list',[user_profController::class,'user_profile']);
$system->start();

