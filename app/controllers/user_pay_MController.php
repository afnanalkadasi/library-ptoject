<?php
namespace coding\app\controllers;



class user_pay_MController extends Controller{

    function add_user_payment(){
        $this->view('add_user_payment');
    }
    function edituser_payment(){
        $this->view('edit_user_payment');
    }
    
    function user_payment(){
        $this->view('app-user_payment-list');
    } 
    public function delete(){
        
    }




}
?>