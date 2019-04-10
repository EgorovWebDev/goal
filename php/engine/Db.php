<?php
class Db{
    public $connect;
    public function __construct(){
        $this->connect = new mysqli('localhost', 'root', '', 'goal');
    }
    public function selectAll(){
        $q = "SELECT * FROM goods";
        $data= $this->connect->query($q);
        $data->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    public function  selectBrend($brend){
        $q = "SELECT * FROM goods WHERE brend = '".$brend."' ";
        $data= $this->connect->query($q);
        $data->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    public function selectCollection($collection){
        $q = "SELECT * FROM goods WHERE collection = '".$collection."' ";
        $data= $this->connect->query($q);
        $data->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    public function selectModel($model){
        $q = "SELECT * FROM goode WHERE model = '".$model."' ";
        $data= $this->connect->query($q);
        $data->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

}
