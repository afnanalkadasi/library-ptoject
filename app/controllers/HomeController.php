<?php
namespace coding\app\controllers;


use coding\app\controllers\Controller;
use coding\app\Models\Category;
use coding\app\Models\Book;
use coding\app\Models\User;
use coding\app\Models\Offer;

class HomeController extends Controller
{
   
    public function index()
    {   $categories=new Category();
        $allCategories=$categories->getAll();

        $offers=new Offer();
        $alloffers=$offers->getAll();

        $books=new Book();
        $allbooks=$books->getAll();

        $data=["books" => $allbooks,
        "offers"=> $alloffers,
        "categories" =>$allCategories
            ];

        $this->view('index',$data);
    }

    public function sal()
    {
        $this->view('sal');
    }

    public function category()
    {
        $categories=new Category();
        $allCategories=$categories->getAll();

       
        $books=new Book();
        $allbooks=$books->getAll();

        $data=["books" => $allbooks,
        "categories" =>$allCategories
            ];

        $this->view('category',$data);
    }
  
   
    public function details($params=[])
    {
        $book=new Book();
        $result=$book->getSingleRow($params['id']);
        $this->view('details',$result);
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
        $users=new User();
        $allusers=$users->getAll();

        $this->view('login',$allusers);
    }
    public function sign_up()
    {
        $this->view('sign_up');
    }
    
}