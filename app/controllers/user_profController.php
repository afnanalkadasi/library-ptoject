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
    
    function listAll(){
        $user_profiles=new User_profile();
        $alluser_profiles=$user_profiles->getAll();

        $this->view('app-user_profile-list',$alluser_profiles);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $user_profile=new User_profile();
        
        $user_profile->name=$_POST['name'];
        $user_profile->phone=$_POST['phone'];
        $user_profile->address=$_POST['address'];
        $imageName=$this->uploadFile($_FILES['image']);
       
        $user_profile->image=$imageName!=null?$imageName:"default.png";
        $user_profile->created_by=1;
        $user_profile->is_active=$_POST['is_active'];

        if($user_profile->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }

    function update(){

    }
    public function remove(){

    }


    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    



}
?>