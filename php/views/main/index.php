<?php
require_once "php/engine/Db.php";
$this->db = new Db(); 
$a = $this->db->selectSlick();
?>
<head>
        <link rel="stylesheet" type="text/css" href="source/css/slider.css"/>
        <link rel="stylesheet" type="text/css" href="source/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="source/slick/slick-theme.css"/>  
        
</head>
<main>
        <section class="banner">
            <div class="info adidas-info">
                    <h2>Adidas</h2>
                    <p class="model">copa 19</p>
                    <div class="form-buttons">
                            <button class="buy-copa" data-hipeOrder='3'>Купить copa 19</button>
                            <button class="col-copa">Коллекция copa</button>
                    </div>
            </div>
            <img src="source/img/main/adidas_bg.png" alt="adidas">
        </section>

        <section class="banner ">
                <img src="source/img/main/nike_bg.png" alt="nike">

                <div class="info nike-info">
                        <h2>Nike</h2>
                        <p class="model">mercurial vapor 360</p>
                        <div class="form-buttons">
                            <button class="buy-vappor">Купить vapor 360</button>
                            <button class="col-vapor">Коллекция vapor</button>
                        </div>
                </div>
        </section>

        <section class="banner">
                <div class="info  puma-info">
                        <h2>Puma</h2>
                        <p class="model">future 19.1</p>
                        <div class="form-buttons">
                                <button class="buy-future">Купить future 19.1</button>
                                <button class="col-future">Коллекция future</button>
                        </div>
                </div>
                <img src="source/img/main/puma_bg.png" alt="puma"> 
                <img src="source/img/main/puma_bg_1.png" alt="puma"> 
        </section>

        <section class="slick">
        <h1>Популярные товары</h1>
        <div class="slider">   
        <?php
            foreach ($a as $key => $value) {
                echo '          
      <div class="slider-item">
            <div class="slider-item__img">
                <div><img src="'.$a[$key]["img"].'.jpg"></div>
            </div>
            <div class="slider-item__text">
                <p>'.$a[$key]["name"].'</p>
                <p><mark>'.$a[$key]["price"].' ₽</mark></p>
            </div>
        </div>
                    ';
            } 

             ?>
             </div>
        </section>
</main>

