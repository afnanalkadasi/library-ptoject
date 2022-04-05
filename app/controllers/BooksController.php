<?php
namespace coding\app\controllers;

use coding\app\Models\Book;
use coding\app\Models\Author;
use coding\app\Models\Category;
use coding\app\Models\Publisher;


class BooksController extends Controller{
 
    function add_book(){
       

        $categories=new Category();
        $allCategories =$categories->getAll();

         $auth=new Author();
        $allauthors=$auth->getAll();

        $publishers=new Publisher();
        $allpublishers=$publishers->getAll();
  
            $data=["authors" => $allauthors,
            "categories" =>$allCategories,
            "publishers" =>$allpublishers
        ];
      
          $this->view('add_book',$data);

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
  
        $book=new Book();

        $imageName=$this->uploadFile($_FILES['image']);
        $book->image=$imageName!=null?$imageName:"default.png";       
        $book->title=$_POST['title'];
        $book->price=$_POST['price'];
        $book->description=$_POST['description'];
        $book->pages_number=$_POST['pages_number'];
        $book->quantity=$_POST['quantity'];
        $book->format=$_POST['format'];
        $book->category_id=$_POST['categories'];
        $book->author_id=$_POST['authors'];
        $book->publisher_id=$_POST['publishers'];
        $book->created_by=1;
        $book->is_active=$_POST['is_active'];


        if($book->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);


    }
    public function getBody(){

          $book=new Book();

        $imageName=$this->uploadFile($_FILES['image']);
        $book->image=$imageName!=null?$imageName:"default.png";       
        $book->title=$_POST['title'];
        $book->price=$_POST['price'];
        $book->description=$_POST['description'];
        $book->pages_number=$_POST['pages_number'];
        $book->quantity=$_POST['quantity'];
        $book->format=$_POST['format'];
        $book->category_id=$_POST['categories'];
        $book->author_id=$_POST['authors'];
        $book->publisher_id=$_POST['publishers'];
        $book->created_by=1;
        $book->is_active=$_POST['is_active'];

        return $book;  
    }
    function update($params=[]){
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $book           = new Book();
            $selectedBook   = $book->getSingleRow($params['id']);
            $category       = new Category();
            $allCategoires  = $category->getAll();

            $auth=new Author();
            $allauthors=$auth->getAll();
    
            $publishers=new Publisher();
            $allpublishers=$publishers->getAll();

            $data          = array('categories' => $allCategoires, 'book' => $selectedBook,
            "authors" => $allauthors, "publishers" =>$allpublishers );
            $this->view('edit_book', $data);
        }
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $book = $this->getBody();
            $book->update($_POST['id']);
            $this->redirect('/admin/books');
        }
    }
    public function delete_or_recovery($params=[]){
        $book=new Book();
        $book->remove_or_recovery($params['id']);
        $this->redirect('/admin/books');
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