<?php
namespace coding\app\controllers;


use coding\app\Models\Order;

class OrderController extends Controller{

    function add_order(){
        $this->view('add_order');
    }
    function editorder(){
        $this->view('edit_order');
    }
    
    function order(){
        $this->view('app-order-list');
    } 
    public function delete(){
        
    }




}
?>