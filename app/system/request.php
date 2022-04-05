<?php
namespace coding\app\system;
class Request{


  public function getRoute(){
      return $_SERVER["REQUEST_URI"];
  }
  public function getRequestMethod(){
      return $_SERVER["REQUEST_METHOD"];
  }
  public static function getBody()
    {
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            foreach ($_GET as $key => $value) {
                $data[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            foreach ($_POST as $key => $value) {
                $data[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        print_r($data);
        return $data;
    }
        
    

}
?>