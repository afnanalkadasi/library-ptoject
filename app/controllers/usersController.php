<?php
namespace coding\app\controllers;

use coding\app\Models\User;

class UsersController extends Controller{
    public function index()
    {
   
        $this->view('index');
    }
    function newUser(){
        $this->view('new_user');
    }
    function editUser(){
        $this->view('edit_user');
    }
    
        public function show(){

    }

    public function saveUser(){

        //print_r($_POST);
        $user=new User();
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $user->is_active=isset($_POST['is_active'])?1:0;
        $user->role_id=1;
        $user->save();
        if($user->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }


    public function users()
    {
        $this->view('app-user-list');
    }

    public function delete(){
        
    }




}
?>