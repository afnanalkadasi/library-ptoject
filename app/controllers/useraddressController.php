<?php
namespace coding\app\controllers;

use coding\app\Models\User_address;


class useraddressController extends Controller{

    function add_useraddress(){
        $this->view('add_useraddress');
    }
    function edituseraddress(){
        $this->view('edit_useraddress');
    }
    
    function useraddress(){
        $this->view('app-useraddress-list');
    } 
    public function delete(){
        
    }




}
?>