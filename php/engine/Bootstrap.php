<?php
/** class Bootstrap
 * Получает url  и сравнивает его с страницами.
 */
class Bootstrap
{
   public $routingTable = [
        '' => "main",
        '/' => "main",
        'catalog' => "catalog",
        'about' => "about",
        'basket' => "basket",
        'contacts' => "contacts",
        'main' => "main",
        'sign' => "sign",
        'api'=> 'api',
        'basket' => 'basket',
        'help' => 'help',
    ];

    public function __construct()
    {
        
        $url = $_GET["url"] ?? 'main';
        $url = strtolower($url);
        $url = explode("/", $url);
        $selectedPage = $url[0];
        $additionalInfo = $url[1] ?? null;
        if (in_array($selectedPage,$this->routingTable)){
            if ($selectedPage=='api') {
                
                $api=new API($additionalInfo);
            }
            else {
                $view = new View($selectedPage);
            }
        }else{
            require_once ('php/views/eror/index.php');
        }
    }
}