<?php
namespace coding\app\controllers;

use coding\app\Models\Offer;


class OfferController extends Controller{

    function add_offer(){
        $this->view('add_offer');
    }
    function editoffer(){
        $this->view('edit_offer');
    }
    
    function offer(){
        $this->view('app-offer-list');
    } 
    public function delete(){
        
    }




}
?>