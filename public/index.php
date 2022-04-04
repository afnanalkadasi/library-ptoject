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

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
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
Router::get('/details/{id}', [HomeController::class, 'details']);
Router::get('/checkout', [HomeController::class, 'checkout']);
Router::get('/login', [HomeController::class, 'login']);
Router::get('/sign_up', [HomeController::class, 'sign_up']);
Router::get('/admin/dashboards-ecommerce', [HomeController::class, 'dashboard']);
#########################users#######################
Router::get('/admin/users',[UsersController::class,'listAll']);
Router::get('/admin/new_user',[UsersController::class,'create']);
Router::get('/admin/edit_user/{id}',[UsersController::class,'update']);
Router::post('/admin/edit_user',[UsersController::class,'update']);
Router::post('/admin/remove_user/{id}',[UsersController::class,'delete_or_recovery']);
Router::post('/admin/save_user',[UsersController::class,'store']);
#########################categories#######################
Router::get('/admin/categories',[CategoryController::class,'listAll']);
Router::get('/admin/add_category',[CategoryController::class,'add_category']);
Router::get('/admin/edit_category/{id}',[CategoryController::class,'update']);
Router::post('/admin/edit_category',[CategoryController::class,'update']);
Router::post('/admin/remove_category/{id}',[CategoryController::class,'delete_or_recovery']);
Router::post('/admin/save_category',[CategoryController::class,'store']);
#########################user_payment_methods#######################
Router::get('/admin/user_payment_ms',[user_pay_MController::class,'listAll']);
Router::get('/admin/add_user_payment',[user_pay_MController::class,'add_user_payment']);
Router::get('/admin/edit_user_payment/{id}',[user_pay_MController::class,'update']);
Router::post('/admin/edit_user_payment',[user_pay_MController::class,'update']);
Router::post('/admin/remove_user_payment/{id}',[user_pay_MController::class,'delete_or_recovery']);
Router::post('/admin/save_user_payment',[user_pay_MController::class,'store']);
#########################authors#######################
Router::get('/admin/authors',[AuthorsController::class,'listAll']);
Router::get('/admin/add_author',[AuthorsController::class,'add_author']);
Router::get('/admin/edit_author',[AuthorsController::class,'editauthor']);
Router::get('/admin/remove_author/{id}',[AuthorsController::class,'delete_or_recovery']);
Router::post('/admin/save_author',[AuthorsController::class,'store']);
Router::post('/admin/update_author',[AuthorsController::class,'update']);
#########################publishers#######################
Router::get('/admin/publishers',[PublishersController::class,'listAll']);
Router::get('/admin/add_publisher',[PublishersController::class,'add_publisher']);
Router::get('/admin/edit_publisher',[PublishersController::class,'editpublisher']);
Router::get('/admin/remove_publisher/{id}',[PublishersController::class,'delete_or_recovery']);
Router::post('/admin/save_publisher',[PublishersController::class,'store']);
#########################books#######################
Router::get('/admin/books',[BooksController::class,'listAll']);
Router::get('/admin/add_book',[BooksController::class,'add_book']);
Router::get('/admin/edit_book/{id}',[BooksController::class,'update']);
Router::post('/admin/edit_book',[BooksController::class,'update']);
Router::post('/admin/remove_book/{id}',[BooksController::class,'delete_or_recovery']);
Router::post('/admin/save_book',[BooksController::class,'store']);
#########################city#######################
Router::get('/admin/city',[CityController::class,'listAll']);
Router::get('/admin/add_city',[CityController::class,'add_city']);
Router::get('/admin/edit_city',[CityController::class,'editcity']);
Router::get('/admin/remove_city/{id}',[CityController::class,'delete_or_recovery']);
Router::post('/admin/save_city',[CityController::class,'store']);
Router::post('/admin/update_city',[CityController::class,'update']);
#########################offers#######################
Router::get('/admin/offers',[OfferController::class,'listAll']);
Router::get('/admin/add_offer',[OfferController::class,'add_offer']);
Router::get('/admin/edit_offer',[OfferController::class,'editoffer']);
Router::get('/admin/remove_offer/{id}',[OfferController::class,'delete_or_recovery']);
Router::post('/admin/save_offer',[OfferController::class,'store']);
Router::post('/admin/update_offer',[OfferController::class,'update']);
#########################orders#######################
Router::get('/admin/orders',[OrderController::class,'listAll']);
Router::get('/admin/edit_order',[OrderController::class,'editorder']);
Router::get('/admin/remove_order/{id}',[OrderController::class,'delete_or_recovery']);
Router::post('/admin/save_order',[OrderController::class,'store']);
Router::post('/admin/update_order',[OrderController::class,'update']);
#########################orderdetails#######################
Router::get('/admin/orderdetails',[orderdetailsController::class,'listAll']);
Router::get('/admin/remove_orderdetails/{id}',[orderdetailsController::class,'delete_or_recovery']);
Router::post('/admin/save_orderdetails',[orderdetailsController::class,'store']);
Router::post('/admin/update_orderdetails',[orderdetailsController::class,'update']);
#########################payements#######################
Router::get('/admin/payements',[payementController::class,'listAll']);
Router::get('/admin/add_payements',[payementController::class,'add_payements']);
Router::get('/admin/edit_payements',[payementController::class,'editpayements']);
Router::get('/admin/remove_payement/{id}',[payementController::class,'delete_or_recovery']);
Router::post('/admin/save_payement',[payementController::class,'store']);
Router::post('/admin/update_payement',[payementController::class,'update']);
#########################roles#######################
Router::get('/admin/roles',[roleController::class,'listAll']);
Router::get('/admin/add_role',[roleController::class,'add_role']);
Router::get('/admin/edit_role',[roleController::class,'editrole']);
Router::get('/admin/remove_role/{id}',[roleController::class,'delete_or_recovery']);
Router::post('/admin/save_role',[roleController::class,'store']);
Router::post('/admin/update_role',[roleController::class,'update']);
#########################useraddress#######################
Router::get('/admin/useraddress',[useraddressController::class,'listAll']);
Router::get('/admin/add_useraddress',[useraddressController::class,'add_useraddress']);
Router::get('/admin/edit_useraddress',[useraddressController::class,'edituseraddress']);
Router::get('/admin/remove_useraddress/{id}',[useraddressController::class,'delete_or_recovery']);
Router::post('/admin/save_useraddress',[useraddressController::class,'store']);
Router::post('/admin/update_useraddress',[useraddressController::class,'update']);
#########################user_token#######################
Router::get('/admin/user_token',[user_tokController::class,'listAll']);
Router::get('/admin/add_user_token',[user_tokController::class,'add_user_token']);
Router::get('/admin/edit_user_token',[user_tokController::class,'edituser_token']);
Router::get('/admin/remove_user_token',[useraddressController::class,'delete_or_recovery']);
Router::post('/admin/save_user_token',[useraddressController::class,'store']);
Router::post('/admin/update_user_token',[useraddressController::class,'update']);
#########################user_profile#######################
Router::get('/admin/user_profile',[user_profController::class,'listAll']);
Router::get('/admin/add_user_profile',[user_profController::class,'add_user_profile']);
Router::get('/admin/edit_user_profile',[user_profController::class,'edituser_profile']);
Router::get('/admin/remove_user_profile/{id}',[user_profController::class,'delete_or_recovery']);
Router::post('/admin/save_user_profile',[user_profController::class,'store']);
Router::post('/admin/update_user_profile',[user_profController::class,'update']);

$system->start();

