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
        'sign' => "sign"
    ];

    public function __construct()
    {
        $url = $_GET["url"] ?? null;
        $url = strtolower($url);
        $url = explode("/", $url);
        $selectedPage = $url[0];
        $additionalInfo = $url[1] ?? null;  
        $view = new View($selectedPage);
        $view->render();
    }
}