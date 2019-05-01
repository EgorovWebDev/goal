<?php
require_once "php/engine/Db.php";
$this->db = new Db(); 
$ph = $this->db->selectPhotos();
$inf = $this->db->selectInfo();
$desc = $this->db->selectDescription();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="source/css/slider-card.css">
    <link rel="stylesheet" type="text/css" href="source/slick1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="source/slick1/slick-theme.css"/>

    <title>Карточка</title>
</head>
<body>
    <main>
    <section class="sliders">
    <div class="slider1">
    <?php
            foreach ($ph as $key => $value) {
                echo '
                <div class="slider-item__img">
                <div><img class="main-img" src="'.$ph[$key]["photo"].'.jpg"></div>
                </div>
                    ';
            }
        ?>
    </div>
 
    <div class="slider2">
        <?php
            foreach ($ph as $key => $value) {
                echo '
                <div><img src="'.$ph[$key]["photo"].'.jpg"></div>
                    ';
            }
        ?>
    </div>
    </section>

    <section class="order">
        <?php
            foreach ($inf as $key => $value) {
                echo '
                <p class="name">'.$inf[$key]["name"].'</p>
                <p class="price">'.$inf[$key]["price"].' ₽</p>
                    ';
            }
        ?>
        <button class="btn_card">ДОБАВИТЬ В КОРЗИНУ</button>
    </section>

    </main>
    <section class="desc">
        <h2>О ТОВАРЕ</h2>
        <?php
            foreach ($desc as $key => $value) {
                echo '
                <p>'.$desc[$key]["description"].'</p>
                    ';
            }
        ?>
    </section>





