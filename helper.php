<?php

class helper
{
    public $pdo;

    public function __construct()
    {

        $config = require_once __DIR__ . '/../config.php';
        $this->pdo = connection::make($config);

    }


    public function getAll($table)
    {
        $sql = "select* from $table ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $nes = $stmt->fetch;
    }

    public function getRow($table,$id,$search="id"){
        $sql=prepare("SELECT * FROM posts WHERE $search=:x");
        $stmt=$this->pdo->prepare($sql);
        if ($stmt->execute(["x" => $id])) {
            return $stmt->fetch();
        };
        return null;
    }
    public function insertRow($table,$data){
        $f=array_keys($data);
        $fields=implode(",", $f);
        $values=implode(",:",$f);
        $sql="insert into $table($fields)values($values)";
        $stmt=$this->pdo=prepare($sql);
        $stmt->execute($data);

    }
    public function updateRow($table,$data,$search="x"){
        $fields="";
        foreach($data as $key=>$v){
            if($key!=$search){$fields.=$key.="=:".$key.=",";}
            $fields=rtrim($fields,",");
        }
        $sql="Update $table set $fields where $search=:x";
        $stmt=$this->pdo=prepare($sql);
        $stmt->execute($data);
    }
}