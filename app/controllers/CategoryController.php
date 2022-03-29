<?php
namespace coding\app\controllers;



class CategoryController extends Controller{

    function add_category(){
        $this->view('add_category');
    }
    function editcategory(){
        $this->view('edit_category');
    }
    
    function category(){
        $this->view('app-category-list');
    } 
    public function delete(){
        
    }




}
?>