<?php
namespace coding\app\controllers;

use coding\app\Models\Book;
use coding\app\Models\Category;
use coding\app\Models\Author;


class BooksController extends Controller{
 
    function add_book(){
        $categories=new Category();
        $auth=new Author();
        $allCategories =$categories->getAll();
        $allauthors=$auth->getAll();

        if($allCategories &&  $allauthors){
            $data=array(
                "categories" =>$allCategories,
                "authors" => $allauthors
            );
            $this->view('add_book',$data);
        }
   
    
        
    }

    function editbook(){
        $this->view('edit_book');
    }
    
    // $bookname=$this->con->real_escape_string($_POST['book']);
    function listAll(){
        $books=new Book();
        $allbooks=$books->getAll();

        $this->view('app-book-list',$allbooks);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $book=new Book();
        $category=new Category();

        $book->name=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['image']);
        $book->image=$imageName!=null?$imageName:"default.png";
        $category->id=$_POST['id'];
        $book->title=$_POST['title'];
        $book->price=$_POST['price'];
        $book->description=$_POST['description'];
        $book->pages_number=$_POST['pages_number'];
        $book->quantity=$_POST['quantity'];
        $book->format=$_POST['format'];
        $book->created_by=1;
        $book->is_active=$_POST['is_active'];

        $book->save();

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