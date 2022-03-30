<?php
namespace coding\app\controllers;


use coding\app\Models\Order;
use coding\app\Models\User_payment_method;
use coding\app\Models\User;
use coding\app\Models\User_address;


class OrderController extends Controller{

   
    function add_order(){

        $users=new User();
        $allusers =$users->getAll();

        $user_payment_methods=new User_payment_method();
        $alluser_payment_methods=$user_payment_methods->getAll();
        
        $user_addresses=new User_address();
        $alluser_addresses =$user_addresses->getAll();

            $data=[
            "users" =>$allusers,
            "user_payment_methods" =>$alluser_payment_methods,
            "user_addresses" => $alluser_addresses
            ];

        $this->view('add_order',$data);
    }

    function editorder(){
        $this->view('edit_order');
    }
    
    function listAll(){
        $orders=new Order();
        $allorders=$orders->getAll();

        $this->view('app-order-list',$allorders);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $order=new order();

     
        $order->title=$_POST['title'];
        $order->discount=$_POST['discount'];
        $order->start_date=$_POST['start_date'];
        $order->end_date=$_POST['end_date'];
        $order->book_ids=$_POST['user_payment_methods'];
        $order->category_ids=$_POST['users'];
        $order->all_user_payment_methods=$_POST['all_user_payment_methods'];
        $order->created_by=1;
        $order->is_active=$_POST['is_active'];


        if($order->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);


    }
    function update(){

    }
    public function remove(){

    }



}
?>