

<head>
<link rel="stylesheet" href="source/css/catalog.css">

</head>



<h1>КАТАЛОГ</h1>
        <main class=container>
            <section class="filters">
                
                <h2>ФИЛЬТРЫ</h2>
                <ul>
                    <li>
                        <h3>ЦЕНА</h3>
                        <div class="price">
                            <input type="range">
                        </div>    
                    </li>
                    <li>
                        <h3>РАЗМЕР</h3>
                        <div class="size_gen">
                            <div class="size">38</div>
                            <div class="size">40</div>
                            <div class="size">42</div>
                            <div class="size">44</div>
                        </div>    
                    </li>
                    <li>
                        <h3>БРЕНД</h3>
                        <div class="radio">
                            <p><input type="radio">Adidas</p>
                            <p><input type="radio">Nike</p>
                            <p><input type="radio">Puma</p>
                        </div>    
                    </li>
                    <li>
                        <h3>ЦВЕТ</h3>
                        <div class="colors"></div>
                        <div class="colors"></div>
                        <div class="colors"></div>
                        <div class="colors"></div>
                        <div class="colors"></div>
                        <div class="colors"></div>
                        <div class="colors"></div>
                        <div class="colors"></div>
                        <div class="colors"></div>
                        <div class="colors"></div>
                    </li>
                </ul>
            </section>

            <section class="catalog">
            <?php while($row = $data->fetch_assoc()){
                    echo '
                
                <div class="catalog_item">
                    <div class="catalog_item_img">
                        <div><img src="'.$row["img"].'.jpg"></div>
                    </div>
                    <div class="catalog_item_text">
                        <p>'.$row["name"].'</p>
                        <p><mark>'.$row["price"].' ₽</mark></p>
                    </div>    
                </div>
                    ';
                } 
                    ?>



                    
            </section>        
                
        </main>