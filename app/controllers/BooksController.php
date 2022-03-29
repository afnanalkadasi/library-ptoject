<?php
namespace coding\app\controllers;

use coding\app\Models\Book;


class BooksController extends Controller{


    function add_book(){
        $this->view('add_book');
    }
    function editbook(){
        $this->view('edit_book');
    }
    
    function book(){
        $this->view('app-book-list');
    } 

}
?>