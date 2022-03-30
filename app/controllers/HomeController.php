<?php
namespace coding\app\controllers;


use coding\app\controllers\Controller;
use coding\app\Models\Category;

class HomeController extends Controller
{
    function listAll(){
     
        $this->view('index');

    }
   
    public function index()
    {   $categories=new Category();
        $allCategories=$categories->getAll();

   
        $this->view('index',$allCategories);
    }

    public function sal()
    {
        $this->view('sal');
    }

    public function category()
    {
        $this->view('category');
    }
    public function details()
    {
        $this->view('details');
    }
    
    public function checkout()
    {
        $this->view('checkout');
    }
    public function dashboard()
    {
        $this->view('dashboards-ecommerce');
    }
    public function login()
    {
        $this->view('login');
    }
    public function sign_up()
    {
        $this->view('sign_up');
    }
    
}