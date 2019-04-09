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
        'api'=> 'api'
    ];

    public function __construct()
    {
        
        $url = $_GET["url"] ?? 'main';
        $url = strtolower($url);
        $url = explode("/", $url);
        $selectedPage = $url[0];
        $additionalInfo = $url[1] ?? null;
        //var_dump($selectedPage);
        if ($selectedPage=='api') {
            
            $api=new API($additionalInfo);
        }
        else {
            $view = new View($selectedPage);
        }
    }
}