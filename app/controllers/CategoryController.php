<?php
namespace coding\app\controllers;

use coding\app\system\AppSystem;
use coding\app\Models\Category;

class CategoryController extends Controller{

    function add_category(){
        $this->view('add_category');
    }
    function listAll(){
        $categories=new Category();
        $allCategories=$categories->getAll();

        $this->view('app-category-list',$allCategories);

    }
 

    function store(){
 
        $category=new Category();
        
        $category->name=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=$_POST['is_active'];
        
        if($category->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }
    public function getBody(){
        $category = new Category();  
        $category->name=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['image']);
        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=$_POST['is_active'];
        // date_default_timezone_set('Africa/Nairobi');
        // $category->created_at   = date("d/m/Y H:i:s") ;
        // $category->upated_at   = date("d/m/Y H:i:s") ;
        return $category;
    }
    
    function update($params=[]){
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $cat=new Category();
            $result=$cat->getSingleRow($params['id']);
            
            $this->view('edit_category',$result);
        }
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $category = $this->getBody();
            $category->update($_POST['id']);
            $this->redirect('/admin/categories');
        }
    }
    public function delete_or_recovery($params=[]){
        $category=new Category();
        $category->remove_or_recovery($params['id']);
        $this->redirect('/admin/categories');
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