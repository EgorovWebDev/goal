<?php
/**
 * Class View вызывает метод для работы с бд исходя из запроса микроса, после обработки
 * рендерит страницу с шапкой отрендериной инфой и футером.
*/
class  View
{
    const HEADER = 'views/static/header.php';
    const FOOTER = 'views/static/footer.php';
    public $data;
    public $page;
    private $dynamicPage = [
        'catalog' => "selectAll",
    ];
    private $staticPage = ("about", "contacts", "main", "sign");
    var_dump($staticPage);
    private $method;
    private $db;


    public function __construct($page=null){
        $this->db = new Db();
        $this->page = $page??'main';
        $this->method=$this->dynamicPage[$this->page];
        
    }
    
    public function render(){
        require_once View::HEADER;
        $m=$this->method;
        $this->$data=$this->db->$m();
        require_once View::FOOTER;
    }
}