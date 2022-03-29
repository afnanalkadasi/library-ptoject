<?php
namespace coding\app\controllers;

use coding\app\Models\Payement;


class payementController extends Controller{


    function add_payements(){
        $this->view('add_payements');
    }
    function editpayements(){
        $this->view('edit_payements');
    }
    
    function payements(){
        $this->view('app-payements-list');
    } 

}
?>