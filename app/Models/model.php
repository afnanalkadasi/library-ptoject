<?php 
namespace coding\app\models;
use coding\app\system\AppSystem;
class Model{
    public static  $tblName;
   

   
   
    function save():bool{
        $values=array();
        $columns=array();
        //get_object_
        foreach(get_object_vars($this) as $key=> $property){
            //echo $property;
            if($property!=self::$tblName)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;}

        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
        $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";
   
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute())
        return true;
        return false;
       // return true;
     //echo $sql_query;
    }

    public function getAll(){
        $sql_query="select * from ".self::$tblName."";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function getSingleRow($id){
        $sql_query="select * from ".self::$tblName." where id=".$id."";
       
       //echo $sql_query;
         $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchObject();
        

    }

    public function update($id){
        $set=array();
        foreach(get_object_vars($this) as $key=> $property){
            $set[] = $key.'='."'".$property."'";
        }
        $set=implode(",",$set);
        $sql_query="update ".self::$tblName." set ".$set." where ID = ".$id.";";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute())
            return true;
        return false;
    }
    public function remove_or_recovery($id){
        $sql_query="select is_active from ".self::$tblName." where ID = ".$id;
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute()){
            $user=$stmt->fetchObject();
            if($user->is_active==1) $newValue=0;
            else $newValue=1;
        }
        $sql_query = "update ".self::$tblName." set is_active =".$newValue." where id=".$id;
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute())
            return true;
        return false;
    }
    public function orderBy(string $column, string $order_type = "ASC")
    {
        $this->finalQuery =" ORDER BY '$column' $order_type ";
        return $this;
    }
    public function groupBy(string $column)
  {
    $this->finalQuery = " GROUP BY '$column'  ";

    return $this;
  }

    public function count(string $column)
    {
       
        $this->finalQuery = " SELECT COUNT('$column') FROM `$this->table` ";
        return $this;
    }

    public function limit(int $number)
    {
        $this->finalQuery =" LIMIT $number ";
        return $this;
    }

    public function innerJoin($columns,$table,$table2,$condition)
    {
        $this->finalQuery ="select $columns from $tablel  inner join $able2 on $condition";
        return $this;
    }

    public function leftJoin()
    {
        $this->finalQuery ="select $columns from $tablel  left join $able2 on $condition";
        return $this;
    }

    public function rightJoin()
    {
        $this->finalQuery ="select $columns from $tablel  right join $able2 on $condition";
        return $this;
    }
    public function where(string $key, string $value)
  {
    $this->finalQuery = " WHERE `$key` = '$value'";

    return $this;
  }

  public function orwhere(string $key1, string $key2, string $value1,string $value2)
  {
    $this->finalQuery = " WHERE `$key1` = '$value1' OR `$key2` = '$value2'";

    return $this;
  }

    public function runQuery()
    {
        $stm = $this->pdo->prepare($this->finalQuery);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }
}
?>