<?php 
class BaseModel {
    protected $host = 'localhost';
    protected $dbName = 'hai_database';
    protected $user = 'root';
    protected $pass = '';
    protected $charset = 'utf8';
    protected $connect = null;
    protected $query = '';

    public function __construct(){
        $this->connect = new PDO("mysql:host=$this->host; dbname=$this->dbName; charset=$this->charset", $this->user, $this->pass);
    }

    public static function all(){
        $model = new static();
        $model->query ="SELECT * FROM $model->table";
        $stmt=$model->connect->prepare($model->query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $result;
    }
    public static function find($id){
        $model = new static();
        $model->query = "SELECT * FROM $model->table WHERE id = $id";
        $stmt= $model->connect->prepare($model->query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        if(count($result) > 0) return $result[0];
        return null;
    }

    public function where($arr = []){
        $this->query = "SELECT * FROM $this->table WHERE ";
        if(count($arr) == 2){
            $this->query .= "$arr[0] = '$arr[1]' ";
        }
        if(count($arr) == 3){
            $this->query .= "$arr[0] $arr[1] '$arr[2]' ";
        }
        // var_dump($this->query);die;
        return $this;
    }

    public function orwhere($arr = []){
        $this->query .= " or ";
        if(count($arr) == 2){
            $this->query .= "$arr[0] = '$arr[1]' ";
        }
        if(count($arr) == 3){
            $this->query .= "$arr[0] $arr[1] '$arr[2]' ";
        }
        return $this;
    }

    public function andwhere($arr = [])
    {
        $this->query .= " and ";
        if(count($arr) == 2){
            $this->query .= "$arr[0] = '$arr[1]' ";
        }
        if(count($arr) == 3){
            $this->query .= "$arr[0] $arr[1] '$arr[2]' ";
        }
        return $this;
    }

    public function get()
    {
        $stmt=$this->connect->prepare($this->query);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
        return $rs;
    }
    public function update()
    {
        $this->query = "UPDATE $this->table SET ";

        foreach($this->columns as $col){
            if($this->{$col} == null){
                continue;
            }
            $this->query .= " $col = '".$this->{$col}."', ";
        }
        $this->query = rtrim($this->query, ", ");


        $this->query .= " WHERE id = $this->id";

        // var_dump($this->query);die;
        $stmt=$this->connect->prepare($this->query);
        try {
            $stmt->execute();
            return $this;
        } catch(PDOException $e){
            var_dump($e->getMessage());die;
        }
    }

    public function delete()
    {
        $this->query = "DELETE FROM $this->table WHERE id = $this->id";
        $stmt = $this->connect->prepare($this->query);
        // $stmt->execute();
        // return true;
        try {
            $stmt->execute();
            return true;
        } catch(PDOException $e){
            var_dump($e->getMessage());die;
        }
    }

    public function insert()
    {
        $this->query = "INSERT INTO $this->table (";
        foreach($this->columns as $col){
            if($this->{$col} == null){
                continue;
            }
            $this->query .= "$col, ";
        }
        $this->query = rtrim($this->query, ", ");
        $this->query .= ") VALUES ( ";

        foreach($this->columns as $col){
            if($this->{$col} == null){
                continue;
            }
            $this->query .= "'".$this->{$col}."', ";
        }
        $this->query = rtrim($this->query, ", ");
        $this->query .= ")";
        $stmt=$this->connect->prepare($this->query);
        try {
            $stmt->execute();
            $this->id = $this->connect->lastInsertId();
            return $this;
        } catch(PDOException $e){
            var_dump($e->getMessage());die;
        }
    }
}
