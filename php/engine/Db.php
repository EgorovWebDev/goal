<?php

class Db{
    private $connect;
    public function __construct(){
        $this->connect = new PDO('mysql:host=localhost;dbname=goal', 'root', '');
    }
    public function selectAll(){
        $stmt = $this->connect->query("SELECT id, name, price, img from goods where id_size=1");   
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function selectSlick(){
        $stmt = $this->connect->query("SELECT id, name, price, img from goods where id in (1, 5, 9, 13, 17, 29)");   
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function selectPhotos(){
        $stmt = $this->connect->query("SELECT id, photo from photos where id in (1, 2, 3, 4, 5) ");   
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function selectInfo(){
        $stmt = $this->connect->query("SELECT name, price, id from goods where id=1");   
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function selectDescription(){
        $stmt = $this->connect->query("SELECT description from goods where id=1");   
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

