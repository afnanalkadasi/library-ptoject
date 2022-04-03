<?php
namespace coding\app\controllers;

use coding\app\Models\Order_details;
use coding\app\Models\Book;
use coding\app\Models\Order;

class orderdetailsController extends Controller{


  
    
    function listAll(){
        $orderdetails=new Order_details();
        $allorderdetails=$orderdetails->getAll();

   
        
       
        $this->view('app-orderdetails-list', $allorderdetails);
    } 

}
?>