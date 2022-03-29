<?php
namespace coding\app\controllers;



class roleController extends Controller{


    function add_role(){
        $this->view('add_role');
    }
    function editrole(){
        $this->view('edit_role');
    }
    
    function role(){
        $this->view('app-role-list');
    } 
}
?>