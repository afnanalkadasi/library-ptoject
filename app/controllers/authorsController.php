<?php
namespace coding\app\controllers;

use coding\app\Models\AUthor;

class AuthorsController extends Controller{

    public function createAuthor(){
        $author=new AUthor();
        $author->name="ali";
        $author->phone="77878788";
        $author->bio="fafdasdfasdfas";
        $author->email="auth@gmail.com";
        $author->created_by=1;
        $author->is_active=1;
        $author->save();
    }
    function add_author(){
        $this->view('add_author');
    }
    function editauthor(){
        $this->view('edit_author');
    }
    
    function author(){
        $this->view('app-author-list');
    } 

}
?>