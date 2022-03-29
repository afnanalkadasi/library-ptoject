<?php
namespace coding\app\controllers;



class PublishersController extends Controller{


    function add_publisher(){
        $this->view('add_publisher');
    }
    function editpublisher(){
        $this->view('edit_publisher');
    }
    
    function publisher(){
        $this->view('app-publisher-list');
    } 

}
?>