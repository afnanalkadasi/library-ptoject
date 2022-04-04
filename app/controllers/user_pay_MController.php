<?php
namespace coding\app\controllers;

use coding\app\Models\User_payment_method;
use coding\app\Models\User;
use coding\app\Models\Payement;

class user_pay_MController extends Controller{
 
    function add_user_payment(){
        $users=new User();
        $allusers=$users->getAll();

        $payements=new Payement();
        $allpayements=$payements->getAll();

        $data=["users" => $allusers,
        "payements" =>$allpayements
                ];
        $this->view('add_user_payment',$data);
    }

    function listAll(){
        $user_payments=new User_payment_method();
        $alluser_payments=$user_payments->getAll();

        $this->view('app-user_payment-list',$alluser_payments);

    }
 

    function store(){
       
        $user_payment_method=new User_payment_method();
        $user_payment_method->user_id=$_POST['users'];
        $user_payment_method->payement_id=$_POST['payements'];
        $user_payment_method->is_active=$_POST['is_active'];


        if($user_payment_method->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);


    }
    public function getBody(){
        $user_payment_method=new User_payment_method();
        $user_payment_method->user_id=$_POST['users'];
        $user_payment_method->payement_id=$_POST['payements'];
        $user_payment_method->is_active=$_POST['is_active'];
   
        return $user_payment_method;
    }
    
    function update($params=[]){
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $user_payments=new User_payment_method();
            $alluser_payments=$user_payments->getSingleRow($params['id']);

            $users=new User();
            $allusers=$users->getAll();
    
            $payements=new Payement();
            $allpayements=$payements->getAll();

            $data = array('payements' => $allpayements, 'users' => $allusers,'user_payments' => $alluser_payments);

            $this->view('edit_user_payment',$data);
        }
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $user_payments = $this->getBody();
            $user_payments->update($_POST['id']);
            $this->redirect('/admin/user_payment_ms');
        }
    }
    public function delete_or_recovery($params=[]){
        $user_payments=new User_payment_method();
        $user_payments->remove_or_recovery($params['id']);
        $this->redirect('/admin/user_payment_ms');
    }



}
?>