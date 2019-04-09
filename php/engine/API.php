<?php
class API
{
    private $data;
    private $actions=[
        'copaCol'=>'selectCollection',
        'vaporCol'=>'selectCollection',
        'futureCol'=>'selectCollection',
        'copaMod' => 'selectModel',
        'vaporMod' => 'selectModel',
        'futureMod' => 'selectModel'
    ];
    public function __construct($addInfo){
       
        $this->db = new Db();
      //  $this->actions = $actions ?? null;
        if (in_array($this->actions, $addInfo)) {
            $act=$this->actions[$addInfo];
            $this->$data=$this->db->$act($_POST['hipeOrder']);
        }
    }

    public function respond($data){
        echo json_encode($this->data);
    }

}