<?php
/**
 * Class View вызывает метод для работы с бд исходя из запроса микроса, после обработки
 * рендерит страницу с шапкой отрендериной инфой и футером.
*/
class  View
{
    const HEADER = 'php/views/static/header.php';
    const FOOTER = 'php/views/static/footer.php';
    public $data;
    public $page;
    private $dynamicPage = [
        'catalog' => "selectAll",
    ];
    private $staticPage =["about", "contacts", "main", "sign"];
    private $method;
    private $db;


    public function __construct($page = null){
        $this->db = new Db();
        $this->page = $page ?? null;
        if (in_array($this->page,$this->staticPage)) {
            $this->render();    
        }
        else {
            $this->method=$this->dynamicPage[$this->page];
            $this->render('m'); //TO DO - передавать параметр для рендера
        }
    }

    public function render($static=null){
        require_once View::HEADER;
        if (!empty($static)){
          
            $m=$this->method; 
            $this->data=$this->db->$m();
        }
        else {
            require_once ('php/views/'.$this->page.'/index.php');
        }
        require_once View::FOOTER;
    }
}