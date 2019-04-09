<?php
class Db{
    public $connect;
    public function __construct(){
        $this->connect = new mysqli('localhost', 'root', '', 'goal');
    }
    public function selectBrand($brand){
        $q = "SELECT * FROM brand where brand = ?";
        $preparedStatement = $this->connect->prepare($q);
        $preparedStatement->bind_param("s", $brand);
        $preparedStatement->execute(); 
        $result=$preparedStatement->get_result();
        $preparedStatement->close();
        return $result->fetch_array(MYSQLI_ASSOC);
    }
    public function selectAll(){
        $q = "SELECT * FROM goods";
        $data= $this->connect->query($q);
        $data->fetch_all(MYSQLI_ASSOC);
    }
}
