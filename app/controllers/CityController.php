<?php
namespace coding\app\controllers;

use coding\app\Models\City;


class CityController extends Controller{

    function add_city(){
        $this->view('add_city');
    }
    function editcity(){
        $this->view('edit_city');
    }
    
    function city(){
        $this->view('app-city-list');
    } 
    public function delete(){
        
    }




}
?>