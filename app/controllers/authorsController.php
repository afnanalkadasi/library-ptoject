<?php
namespace coding\app\controllers;

use coding\app\Models\AUthor;

class AuthorsController{

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

}
?>