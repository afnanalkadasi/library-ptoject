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
use coding\app\controllers\user_tokController;
use coding\app\controllers\roleController;


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

Router::get('/', [HomeController::class, 'index'],[CategoryController::class,'listAll']);
Router::get('/sal', [HomeController::class, 'sal']);
Router::get('/category', [HomeController::class, 'category']);
Router::get('/details', [HomeController::class, 'details']);
Router::get('/checkout', [HomeController::class, 'checkout']);
Router::get('/login', [HomeController::class, 'login']);
Router::get('/sign_up', [HomeController::class, 'sign_up']);
Router::get('/dashboards-ecommerce', [HomeController::class, 'dashboard']);
////////////////////////////user///////////
Router::get('/users',[UsersController::class,'listAll']);
Router::get('/new_user',[UsersController::class,'create']);
Router::get('/edit_user',[UsersController::class,'editUser']);
Router::get('/remove_user',[UsersController::class,'remove']);
Router::post('/save_user',[UsersController::class,'store']);
Router::post('/update_user',[UsersController::class,'update']);

////////////////////////////category///////////
Router::get('/categories',[CategoryController::class,'listAll']);
Router::get('/add_category',[CategoryController::class,'add_category']);
Router::get('/edit_category',[CategoryController::class,'editcategory']);
Router::get('/remove_category',[CategoryController::class,'remove']);
Router::post('/save_category',[CategoryController::class,'store']);
Router::post('/update_category',[CategoryController::class,'update']);

////////////////////////////Authors///////////
Router::get('/authors',[AuthorsController::class,'listAll']);
Router::get('/add_author',[AuthorsController::class,'add_author']);
Router::get('/edit_author',[AuthorsController::class,'editauthor']);
Router::get('/remove_author',[AuthorsController::class,'remove']);
Router::post('/save_author',[AuthorsController::class,'store']);
Router::post('/update_author',[AuthorsController::class,'update']);
////////////////////////////Publishers///////////
Router::get('/publishers',[PublishersController::class,'listAll']);
Router::get('/add_publisher',[PublishersController::class,'add_publisher']);
Router::get('/edit_publisher',[PublishersController::class,'editpublisher']);
Router::get('/remove_publisher',[PublishersController::class,'remove']);
Router::post('/save_publisher',[PublishersController::class,'store']);
Router::post('/update_publisher',[PublishersController::class,'update']);
////////////////////////////book///////////
Router::get('/books',[BooksController::class,'listAll']);
Router::get('/add_book',[BooksController::class,'add_book']);
Router::get('/edit_book',[BooksController::class,'editbook']);
Router::get('/remove_book',[BooksController::class,'remove']);
Router::post('/save_book',[BooksController::class,'store']);
Router::post('/update_book',[BooksController::class,'update']);
////////////////////////////city///////////
Router::get('/city',[CityController::class,'listAll']);
Router::get('/add_city',[CityController::class,'add_city']);
Router::get('/edit_city',[CityController::class,'editcity']);
Router::get('/remove_city',[CityController::class,'remove']);
Router::post('/save_city',[CityController::class,'store']);
Router::post('/update_city',[CityController::class,'update']);
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
Router::get('/payements',[payementController::class,'listAll']);
Router::get('/add_payements',[payementController::class,'add_payements']);
Router::get('/edit_payements',[payementController::class,'editpayements']);
Router::get('/remove_payement',[payementController::class,'remove']);
Router::post('/save_payement',[payementController::class,'store']);
Router::post('/update_payement',[payementController::class,'update']);
////////////////////////////user_addresses///////////
Router::get('/add_useraddress',[useraddressController::class,'add_useraddress']);
Router::get('/edit_useraddress',[useraddressController::class,'edituseraddress']);
Router::get('/app-useraddress-list',[useraddressController::class,'useraddress']);
////////////////////////////user_addresses///////////
Router::get('/add_user_payment',[user_pay_MController::class,'add_user_payment']);
Router::get('/edit_user_payment',[user_pay_MController::class,'edituser_payment']);
Router::get('/app-user_payment-list',[user_pay_MController::class,'user_payment']);
////////////////////////////user_profiles///////////
Router::get('/user_profile',[user_profController::class,'listAll']);
Router::get('/add_user_profile',[user_profController::class,'add_user_profile']);
Router::get('/edit_user_profile',[user_profController::class,'edituser_profile']);
Router::get('/remove_user_profile',[user_profController::class,'remove']);
Router::post('/save_user_profile',[user_profController::class,'store']);
Router::post('/update_user_profile',[user_profController::class,'update']);
////////////////////////////user_token///////////
Router::get('/add_user_token',[user_tokController::class,'add_user_token']);
Router::get('/edit_user_token',[user_tokController::class,'edituser_token']);
Router::get('/app-user_token-list',[user_tokController::class,'user_token']);
////////////////////////////role///////////
Router::get('/roles',[roleController::class,'listAll']);
Router::get('/add_role',[roleController::class,'add_role']);
Router::get('/edit_role',[roleController::class,'editrole']);
Router::get('/remove_role',[roleController::class,'remove']);
Router::post('/save_role',[roleController::class,'store']);
Router::post('/update_role',[roleController::class,'update']);

$system->start();

