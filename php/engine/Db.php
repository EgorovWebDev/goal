<?php
class Db{
    public $connect;
    public function __construct(){
        $this->connect = new mysqli('localhost', 'root', '', 'goal');
    }
        public $response = [
        'status' => false , 
        'data' => [] , 
        'errorInfo' => '', 
    ]; 
    public function selectAll(){
        $query = "set names utf8";
        $connect->query($query);
        $query = "SELECT  name, price, img from goods where id_size=1";
        $data = $this->connect->query($query);
        
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

 
    public function registration($login , $password, $email, $fio, $contacts){
        if ($this->getLogin($login)['status']) {
            $this->response['status'] = false;
            $this->response['errorInfo'] = 'user already exists';
        } else {
            $sth = $this->connect->prepare("INSERT INTO user (login, password, email, fio, contacts) VALUES (?, ?, ?, ?, ?)");
            $status = $sth->execute(Array($login, $password, $email, $fio, $contacts));
            if (!$status) {
                $this->response['status'] = false;
                $this->response['errorInfo'] = 'error of insert into database';
            } else {
                $this->response['status'] = true;
            } 
        }
        return $this->response;
    }   
    public function getLogin($login){
        $sth = $this->connect->prepare("SELECT * FROM user WHERE login = ?");
        $sth->execute(Array($login));
        if ($data = $sth->fetch()){
            $this->response['status'] = true;
            $this->response['data'] = $data;
        } else {
            $this->response['status'] = false;
            $this->response['errorInfo'] = 'error of select from database';
        }
        return $this->response;
    }

}



