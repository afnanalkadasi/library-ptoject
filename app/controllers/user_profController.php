<?php
namespace coding\app\controllers;

use coding\app\Models\User_profile;


class user_profController extends Controller{


    function add_user_profile(){
        $this->view('add_user_profile');
    }
    function edituser_profile(){
        $this->view('edit_user_profile');
    }
    
    function user_profile(){
        $this->view('app-user_profile-list');
    } 

}
?>